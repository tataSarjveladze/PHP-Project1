<?php

namespace GFF\Official\Controller;

use Omedia\DBManager\DatabaseConnection;
use Omedia\HttpFoundation\Enum\FlashMessageType;
use Omedia\HttpFoundation\FlashMessage;
use Omedia\Temple\TemplateRenderer;

/**
 * Controller for the UserRegisterController
 */
class UserRegisterController extends PageController {

  /**
   * The signup description.
   */
  public function signupPage(): void {
    $this->renderTemplate('signup');
  }

  /**
   * Register user in database.
   */
  public function registerUser() {
    try {
      $pdo = DatabaseConnection::getInstance()->getConnection();

      $full_name = $_POST['fullname'];
      $username = $_POST['username'];
      $password = $_POST['password'];

      // If any of these fields are empty, throw exception.
      if (empty($full_name) || empty($username) || empty($password)) {
        throw new \Exception('All fields are required.');
      }

      // First check if such username is already taken.
      // Use prepared statements.
      $statement = $pdo->prepare('select count(*) from users where username = :username');
      $statement->execute(['username' => $username]);
      if ($statement->fetchColumn() > 0) {
        throw new \Exception('Username already taken');
      }

      // Encrypt the password.
      $encrypted_password = password_hash($password, PASSWORD_BCRYPT);

      // Handle the avatar upload. Save the image into the avatar blob field.
      $avatar = $_FILES['avatar'];
      if ($avatar['error'] !== UPLOAD_ERR_OK) {
        // @todo: Since avatar is not required, we could log this error and continue.
      }

      $statement = $pdo->prepare('insert into users (fullname, username, password, avatar) 
    values (:fullname, :username, :password, :avatar)');

      $statement->execute([
          'fullname' => $full_name,
          'username' => $username,
          'password' => $encrypted_password,
          'avatar' => $avatar['tmp_name'] ? file_get_contents($avatar['tmp_name']) : null,
      ]);

      FlashMessage::addMessage(FlashMessageType::SUCCESS, 'User ' . $username . ' registered successfully!');

      $this->redirect('/');
    } catch (\PDOException|\Exception $e) {
      FlashMessage::addMessage(FlashMessageType::ERROR, "Database error occurred: " . $e->getMessage());

      $this->redirect('/signup');
    }
  }

}
