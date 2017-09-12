

    <h2>Due Today <?php echo date("m/d/Y", strtotime("-1 day")); ?></h2><div class="zero">

        <?php $result = get_assignments_by_user($user_id, 0); ?>
        <table>
            <tr>
                <th>
                    Assignment:
                </th>
                <th>Comments:</th>
                <th></th>
            </tr>



            <?php foreach ($result as $one) : ?>
                <tr>
                    <td>
                        <?php echo $one['assignmentName']; ?></td>
                    <td><?php echo $one['assignmentComments']; ?></td>
                    <td><form action="index.php" method="post">
                            <input type="hidden" name="action" value="ShowEdit"
                                   <input type="hidden" name="userId" value="<?php echo $one['userId'];?>">
                                   <input type="hidden" name="assignmentId" value="<?php echo $one['assignmentId'];?>">
                                   <input type="hidden" name="assignmentName" value="<?php echo $one['assignmentName'];?>">
                                   <input type="hidden" name="comments" value="<?php echo $one['assignmentComments'];?>">
                                   <input type="hidden" name="date" value="<?php echo $one['dueDate'];?>">
                                   <input type="submit" value="Edit">
                            
                        </form>   </td>

                </tr>   

            <?php endforeach; ?>
        </table>
    </div>
    <h2>One Day Remaining <?php echo date("m/d/Y", strtotime("+0 day")); ?></h2><div class="zero">
        <?php $result = get_assignments_by_user($user_id, 1); ?>
        <table>
            <tr>
                <th>
                    Assignment:
                </th>
                <th>Comments:</th>
                <th></th>
            </tr>



            <?php foreach ($result as $one) : ?>
                <tr>
                    <td>
                        <?php echo $one['assignmentName']; ?></td>
                    <td><?php echo $one['assignmentComments']; ?></td>
                    <td><form action="index.php" method="post">
                            <input type="hidden" name="action" value="ShowEdit"
                                   <input type="hidden" name="userId" value="<?php echo $one['userId'];?>">
                                   <input type="hidden" name="assignmentId" value="<?php echo $one['assignmentId'];?>">
                                   <input type="hidden" name="assignmentName" value="<?php echo $one['assignmentName'];?>">
                                   <input type="hidden" name="comments" value="<?php echo $one['assignmentComments'];?>">
                                   <input type="hidden" name="date" value="<?php echo $one['dueDate'];?>">
                                   <input type="submit" value="Edit">
                            
                        </form>   </td>
                </tr>   

            <?php endforeach; ?>
        </table>



    </div>
    <h2>Two Days Remaining <?php echo date("m/d/Y", strtotime("+1 day")); ?></h2><div class="zero">

        <?php $result = get_assignments_by_user($user_id, 2); ?>
        <table>
            <tr>
                <th>
                    Assignment:
                </th>
                <th>Comments:</th>
                <th></th>
            </tr>



            <?php foreach ($result as $one) : ?>
                <tr>
                    <td>
                        <?php echo $one['assignmentName']; ?></td>
                    <td><?php echo $one['assignmentComments']; ?></td>
                    <td><form action="index.php" method="post">
                            <input type="hidden" name="action" value="ShowEdit"
                                   <input type="hidden" name="userId" value="<?php echo $one['userId'];?>">
                                   <input type="hidden" name="assignmentId" value="<?php echo $one['assignmentId'];?>">
                                   <input type="hidden" name="assignmentName" value="<?php echo $one['assignmentName'];?>">
                                   <input type="hidden" name="comments" value="<?php echo $one['assignmentComments'];?>">
                                   <input type="hidden" name="date" value="<?php echo $one['dueDate'];?>">
                                   <input type="submit" value="Edit">
                            
                        </form>   </td>
                </tr>   

            <?php endforeach; ?>
        </table>

    </div>
    <h2>Three Days Remaining <?php echo date("m/d/Y", strtotime("+2 day")); ?></h2><div class="zero">
        <?php $result = get_assignments_by_user($user_id, 3); ?>
        <table>
            <tr>
                <th>
                    Assignment:
                </th>
                <th>Comments:</th>
                <th></th>
            </tr>



            <?php foreach ($result as $one) : ?>
                <tr>
                    <td>
                        <?php echo $one['assignmentName']; ?></td>
                    <td><?php echo $one['assignmentComments']; ?></td>
                    <td><form action="index.php" method="post">
                            <input type="hidden" name="action" value="ShowEdit"
                                   <input type="hidden" name="userId" value="<?php echo $one['userId'];?>">
                                   <input type="hidden" name="assignmentId" value="<?php echo $one['assignmentId'];?>">
                                   <input type="hidden" name="assignmentName" value="<?php echo $one['assignmentName'];?>">
                                   <input type="hidden" name="comments" value="<?php echo $one['assignmentComments'];?>">
                                   <input type="hidden" name="date" value="<?php echo $one['dueDate'];?>">
                                   <input type="submit" value="Edit">
                            
                        </form>  </td>
                </tr>   

            <?php endforeach; ?>
        </table>

    </div>
    <h2>Four or More Days Remaining</h2><div class="zero">

        <?php $result = get_assignments_by_user_future($user_id); ?>
        <table>
            <tr>
                <th>
                    Assignment:
                </th>
                <th>Comments:</th>
                <th>Due Date:</th>
                <th> </th>
            </tr>



            <?php foreach ($result as $one) : ?>
                <tr>
                    <td>
                        <?php echo $one['assignmentName']; ?></td>
                    <td><?php echo $one['assignmentComments']; ?></td>
                    <td><?php $date=date_create($one['dueDate']); echo date_format($date, "m/d/Y");  ?></td>
                    <td><form action="index.php" method="post">
                            <input type="hidden" name="action" value="ShowEdit"
                                   <input type="hidden" name="userId" value="<?php echo $one['userId'];?>">
                                   <input type="hidden" name="assignmentId" value="<?php echo $one['assignmentId'];?>">
                                   <input type="hidden" name="assignmentName" value="<?php echo $one['assignmentName'];?>">
                                   <input type="hidden" name="comments" value="<?php echo $one['assignmentComments'];?>">
                                   <input type="hidden" name="date" value="<?php echo $one['dueDate'];?>">
                                   <input type="submit" value="Edit">
                            
                        </form>   </td>
                </tr>   

            <?php endforeach; ?>

        </table>

    </div>
    <br><a href="view/assignment_add.php">Add assignment</a>

