<a href="index.php">Home</a>

<?php
$parameter=false;
// $task=[];
if($_SERVER["REQUEST_METHOD"] === "POST"){
    
        $fptr="task.json";
        $file=file_get_contents($fptr);
        $tasks=json_decode($file,true);
        $tasks=array_filter($tasks, function($tasks){
            return $tasks["tasktitle"] !== $_POST["taskdata"]; 
        });
        file_put_contents("task.json", json_encode($tasks, JSON_PRETTY_PRINT));
        header('Location: tasklist.php');
        exit; 
}

?>
