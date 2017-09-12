<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>
    <h1>assignment List</h1>

    <aside>
        <!-- display a list of categories -->

        <table>
            <tr>
                <th>Name</th>
                <th>DueDate</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($assignments as $assignment) : ?>
            <tr>
                <td><?php echo $assignment['assignmentName']; ?></td>
                <td><?php echo $assignment['dueDate']; ?></td>
<!--                <td><form action="." method="post">
                   <input type="hidden" name="action"
                           value="delete_assignment">
                    <input type="hidden" name="assignment_id"
                           value="<?php echo $assignment['assignmentID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $assignment['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            The edit button form function
                <td><form action="." method="post">
             <input type="hidden" name="action"
                           value="show_edit_form">
             <input type="hidden" name="assignment_id"
                           value="<?php echo $assignment['assignmentID']; ?>">
             <input type="hidden" name="category_id"
                           value="<?php echo $assignment['categoryID']; ?>">
         <input value=" <?php echo $assignment['assignmentCode']; ?>" name="assignmentCode" type="hidden">  
         <input value=" <?php echo $assignment['assignmentName']; ?>" name="assignmentName" type="hidden">
         <input value=" <?php echo $assignment['listPrice']; ?>" name="listPrice" type="hidden">    
             <input type="submit" value="Edit">
                </form></td>-->
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add assignment</a></p>
      
        <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>        
    </section>
</main>
<?php include '../view/footer.php'; ?>