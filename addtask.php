<?php 
session_start();
if(!isset($_SESSION["username"])){
    header('Location: userLogin.php');
    exit();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $content= [];
    $Tasktitle = $_POST["tasktitle"];
    $TaskDescription = $_POST["taskdescription"];
    $TaskDue = $_POST["duedate"];
    $Taskstatus = "New";
    $UserID = $_SESSION["username"];
     echo $Tasktitle . "<br />" .$TaskDescription . "<br />" .$TaskDue . "<br />" .$Taskstatus . "<br />" .$UserID;
    $task = [
        "tasktitle" => $Tasktitle,
        "taskdescription" => $TaskDescription,
        "duedate" => $TaskDue,
        "taskstatus" => $Taskstatus,
        "username" => $UserID
    ];

    $fptr = "task.json";
    $tasks = file_get_contents($fptr);
    $content = json_decode($tasks, true);
    $content[] = $task;
    file_put_contents("task.json", json_encode($content , JSON_PRETTY_PRINT ));
    }


 ?>
 <a href="index.php">Home</a>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="text" name="tasktitle" placeholder="Task Title">
    <input type="text" name="taskdescription" placeholder="Task Description">
    <input type="date" name="duedate" placeholder="Due Date">
    <input type="submit" value="Add Task">
</form>


