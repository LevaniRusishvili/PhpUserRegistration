<?php

require_once 'includes/header.php';
?>

<div>
    <h1>Add a New Movie</h1>
    <form action="includes/add-movie-inc.php" method="post">
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="poster_url" placeholder="Poster URL" required>
    <input type="date" name="date" placeholder="Date" required>
    <input type = "text" name="plot_summary" placeholder="movieDescription" required>
    <input type = "text" name ="director" placeholder="moviedirector" required>
    <button type = "submit" name = "submit">Add Movie</button>

</div>

<?php
require_once 'includes/footer.php';
?>
