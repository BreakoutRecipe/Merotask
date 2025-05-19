    
    <a href="index.php">Home</a>

        <?php 
        session_start();
        function taskview() {
            $fptr="task.json";
            $file=file_get_contents($fptr);
            $tasks=json_decode($file,true);?>
            <ol><?php
            foreach($tasks as $task){
                if ($task["username"] === $_SESSION["username"]){
                   ?> 
                <li>
                    <h3> <?php echo $task['tasktitle']; ?></h3>
                    <ul>
                        <li><?php echo  $task['taskdescription']; ?></li>
                        <li><?php echo "Due on :{$task['duedate']}"; ?></li>
                        <li><?php echo "Status :{$task['taskstatus']}"; ?></li>

                    </ul>
                </li>
            <?php 
                }
            }
            ?>
                </ol><?php
        }
        ?>

        <h2> Here are your Tasks</h2>
        <?php taskview(); ?>
            <h3><a href="addtask.php">ADD Tasks</a></h3>

