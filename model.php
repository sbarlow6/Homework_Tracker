<?php
// Get your database connection
require_once 'support/database.php';

function registerUser( $first_name, $last_name, $email, $password) {
    global $db;
// Use a prepared statement to write the data to the visitors.registration table
  $practiceQuery = "INSERT INTO users
          (usrFirstName, usrEmail, usrLastName, usrPassword)
          VALUES
          (:first_name, :email, :last_name, :password)";
          
    $statement = $db->prepare($practiceQuery);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $regResult = $statement->rowCount();
    $statement->closeCursor();
    return $regResult;

}
function verifyLogin($email)  {
    global $db;
    
    $sql = 'SELECT * FROM users 
            WHERE usrEmail = :email';
    $statement = $db->prepare($sql);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
    
    
    
}

function add_assignment($user_id, $assignmentName, $assignmentComments, $dueDate) {
    global $db;
    $query = 'INSERT INTO assignments
                 (userId, assignmentName, assignmentComments, dueDate)
              VALUES
                 (:user_id, :assignmentName, :assignmentComments, :dueDate)';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':assignmentName', $assignmentName);
    $statement->bindValue(':assignmentComments', $assignmentComments);
    $statement->bindValue(':dueDate', $dueDate);
    $statement->execute();
    $statement->closeCursor();
}

function edit_assignment($user_id, $assignmentId, $assignmentName, $comments, $date) {
    global $db;
    $query = 'UPDATE assignments
                 SET 
                 userId = :user_id,
                 assignmentName = :assignmentName,
                 assignmentComments = :assignmentComments,
                 dueDate = :dueDate
              WHERE
                 assignmentId = :assignment_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':user_id', $user_id);
    $statement->bindValue(':assignment_id', $assignmentId);
    $statement->bindValue(':assignmentName', $assignmentName);
    $statement->bindValue(':assignmentComments', $comments);
    $statement->bindValue(':dueDate', $date);
    $statement->execute();
    $statement->closeCursor();
}

function delete_assignment($assignmentId) {
    global $db;
    $query = 'DELETE FROM assignments
              WHERE
                 assignmentId = :assignment_id';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':assignment_id', $assignmentId);
    
    $statement->execute();
    $statement->closeCursor();
}

function get_assignments_by_user($user_id, $daysrem) {
    global $db;
    $query = 'SELECT * FROM assignments
              WHERE  userId = :userId AND dueDate = CURDATE() + :daysRem;
              ';
    $statement = $db->prepare($query);
    $statement->bindValue(":userId", $user_id);
    $statement->bindValue(":daysRem", $daysrem);
    $statement->execute();
    $assignments = $statement->fetchAll();
    $statement->closeCursor();
    return $assignments;
    
}




function get_assignments_by_user_future($user_id) {
    global $db;
    $query = 'SELECT * FROM assignments
              WHERE  userId = :userId AND dueDate > CURDATE() + 3;
              ';
    $statement = $db->prepare($query);
    $statement->bindValue(":userId", $user_id);
    $statement->execute();
    $assignments = $statement->fetchAll();
    $statement->closeCursor();
    return $assignments;
    
}




// execute makes the statement happen, rowCount states how many rows have changed within a table as a result.
// Test if the insertion worked, if yes display a confirmation, if not show a failure message

?>
