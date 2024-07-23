<?php
require_once 'includes/header.php';
?>

<?php 
require_once 'viewMovies.php'; 
?>

<?php 
if(isset($_SESSION['sessionId'])): 
?>
    You are logged in!
    <form action="includes/index-inc.php" method="post">
        <button type="submit" name="logout-submit">Log out</button>
    </form>
 
<?php elseif(isset($_SESSION['logout_status']) && $_SESSION['logout_status'] == 'logged_out'): ?>
    You have been logged out successfully.
<?php else: ?>
    Home

<?php endif; ?>

<?php
require_once 'includes/footer.php';
?>
