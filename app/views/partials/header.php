<?php if(isset($_SESSION['username'])){
    echo "<p>Welcome ".$_SESSION['username']."</p>";
}else{
    header("Location: /userlogin");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --background-color: #f8f9fa;
            --text-color: #333;
            --container-bg: #fff;
            --shadow: 0 2px 10px rgba(0,0,0,0.08);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem 0;
            box-shadow: var(--shadow);
        }
        
        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo h1 {
            font-weight: 300;
            letter-spacing: 1px;
        }
        
        .logo span {
            font-weight: 600;
        }
        
        main {
            flex: 1;
            padding: 3rem 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .card {
            background-color: var(--container-bg);
            border-radius: 8px;
            box-shadow: var(--shadow);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .welcome-section h2 {
            color: var(--secondary-color);
            margin-bottom: 1rem;
            font-weight: 400;
        }
        
        .date-display {
            color: var(--primary-color);
            font-size: 0.9rem;
            margin: 1rem 0;
        }
        
        .content-section {
            margin-top: 2rem;
        }
        
        footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 1.5rem 0;
            margin-top: auto;
        }
        
        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
        }
        
        .footer-container p {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }
            
            .logo {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <h1><span>Mero</span>Tasks</h1>
            </div>
            <p>Simple & Efficient Task Management</p>
        </div>
    </header>
