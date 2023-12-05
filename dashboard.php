<?php include 'index.php'; ?>
    <div>
        <h2>Dashboard</h2>
        <!-- Display user-specific dashboard content -->
        <?php
        $tasks = getTasks($_SESSION['user_id']);
        // Display tasks or other relevant information
        ?>
    </div>
</body>
</html>
