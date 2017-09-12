<?php 
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['loggedin'])) {
    header('location:login.php');
    exit;
}
$loggedin = $_SESSION['loggedin'];
$userId = $_SESSION['userId'];


?>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


<main>
    <div id="allcontent">
    <h1>Edit Assignment</h1>
    <form action="index.php" method="post">
        

        
        <br>

        <label>Assignment Title:</label>
        <input type="hidden" name="userId" value= '<?php if(isset($userId)) {echo $userId;} ?>' >
        <input type="hidden" name="assignmentId" value='<?php if(isset($assignmentId)) {echo $assignmentId;} ?>' >
        <input type="text" name="assignmentName"  size="35" id="aName" required value="<?php echo $assignmentName;?>"/>
        <br>

        <label>Comments:</label>
        <input type="text" name="comments" id="aComments"  value="<?php echo $comments;?>"/>
        <br>

        <label>Due date:</label>
        <input type="date" name="date" required value="<?php echo $date;?>"/>
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Update" name="action" />
        <input type="submit" value="Delete" name="action" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php">Cancel</a>
    </p>
    </div>
</main>
