<?php

namespace GFF\Official\Controller;

use Omedia\DBManager\DatabaseConnection;

/**
 * Controller for the UsersController  
*/
class UsersController extends PageController {
  
 /**
  * Display users page.
 */
  public function displayUsers(): void {
    // Fetch users from the database, prepare fullname, username, avatar, created fields.
    // Render the users-page template and pass the users array to it.
    $conn = DatabaseConnection::getInstance()->getConnection();

    $stmt = $conn->query('SELECT fullname, username, avatar FROM users');
    $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);

    // If any of the users has an avatar, convert it to base64, as we can't pass binary data in an array.
    // @todo: explain & variable reference to students.
    foreach ($users as &$user) {
      if ($user['avatar']) {
        $user['avatar'] = base64_encode($user['avatar']);
      }
    }

    $this->renderTemplate('users-page', ['users' => $users]);

  }
}
