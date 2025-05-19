<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All tasks</title>
    </head>
    <body>
        <?php 
        $task=[
            "id" => 1,
            "title" => "Make Bed",
            "description" => "As soon as you wake up, Make your bed",
            "dueon" => "6:00 AM"
        ];?>

        <h2> Here are your Tasks</h2>
        <ol>
            <li>
                <h3> <?php echo $task['title']; ?></h3>
                <ul>
                    <li><?php echo  $task['description']; ?></li>
                    <li><?php echo "Due on :{$task['dueon']}"; ?></li>
                </ul>
            </li>
        </ol>
            <h3><a href="addtask.php">ADD Tasks</a></h3>
    </body>
</html>