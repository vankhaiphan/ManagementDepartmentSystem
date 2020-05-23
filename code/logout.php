<?php
    session_start();
    session_unset();
    ?>
    <script>
        window.parent.window.location.href = 'index.php';
    </script>
    <?php
?>