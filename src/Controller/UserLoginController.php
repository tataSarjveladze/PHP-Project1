<?php

namespace GFF\Official\Controller;

use Omedia\HttpFoundation\Session;
use Omedia\HttpFoundation\SessionInterface;
use Omedia\Temple\TemplateRenderer;

/**
 * Controller for user authentication.
*/

class UserLoginController extends PageController {

 /**
  * The login description.
 */
  public function loginPage(): void {
    $this->renderTemplate('login');
  }

  public function authenticate() {
    // Fetch data from the POST request.
    $posted_username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch the users from the JSON file.
    $users_file = dirname(__DIR__, 2) . '/users.json';
    $existing_users = json_decode(file_get_contents($users_file), true);

    // Loop through the users and check if the username and password match.
    foreach ($existing_users as $username => $user) {
      if ($posted_username === $username && password_verify($password, $user['password'])) {
        $this->handleSuccessLogin($username);
      }
    }

    // Redirect back to the login page with an error message.
    header('Location: /login');
    // Use sessions.
    echo "Invalid username or password.";
  }

  private function handleSuccessLogin(string $username): void {
    // @todo: serialize entire user object into session.

    $this->session->setValue('username', $username);

    header('Location: /');
    exit(0);
  }

  public function logout() {
    $this->session->destroy();
    header('Location: /login');
    exit(0);
  }
}
