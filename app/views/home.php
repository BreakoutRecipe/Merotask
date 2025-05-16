<?php 
$title="MeroTasks HeadQuarters";
include 'partials/header.php'; ?>
<main>
        <div class="container">
            <div class="card welcome-section">
                <h2>Welcome to MeroTasks</h2>
                <p>A minimalistic approach to managing your daily tasks and projects.</p>
                
                <div class="date-display">
                    <?php
                    // Display current date
                    $currentDate = date('l, F j, Y');
                    echo "Today is $currentDate";
                    ?>
                </div>
            </div>
            
            <div class="card content-section">
                <h3>Get Started</h3>
                <p>Organize your work and life with MeroTasks. Create tasks, set priorities, and track your progress.</p>
                <!-- Main content area for tasks will go here -->
                <div class="tasks-container">
                    <p>Your tasks will appear here. Start by adding your first task!</p>
                </div>
            </div>
        </div>
    </main>
    <?php include 'partials/footer.php'; ?>
