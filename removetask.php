<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove task</title>
</head>
<body>
<a href="index.php">Home</a>

    <?php 
    session_start();
    $fptr="task.json";
    $file= file_get_contents($fptr);
    $tasks= json_decode($file, true);
    $usertasks=[];

    foreach ($tasks as $task){
        if($task["username"] == $_SESSION["username"]){
            $usertasks[]=$task;
        };
    };?>
        <h3 style="text-align: center;"><?php echo $_SESSION["username"]  ?>! Your tasks</h3>
    <table style="border: none">
    <?php foreach($usertasks as $usertask): ?>
        <form action="process_task.php" method="post">
    <tr>
        <td><?php echo htmlspecialchars($usertask['tasktitle']); ?></td>
        <td><input type="hidden" name="taskdata" value='<?php echo htmlspecialchars($usertask["tasktitle"]); ?>'></td>
        <td><input type="submit" value="Remove Task" onclick="return confirm('Are you sure you want to remove this task?');">
        </td>
    </tr>
    </form>
<?php endforeach; ?>

</body>
</html>