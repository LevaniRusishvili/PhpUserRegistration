<?php
require_once 'includes/fetchMovies.php';
require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<div class="movie-container">
    <?php if (!empty($movies)): ?>
        <?php $index = 0; ?>
        <?php foreach ($movies as $movie): ?>
            <div class="movie" data-index="<?php echo $index; ?>"> 
                <img src="<?php echo htmlspecialchars($movie['poster_url']); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>">
                <div class="movie-details">
                    <h2 class="movie-title"><?php echo htmlspecialchars($movie['title']); ?></h2>
                    <p class="movie-plot-summary"><?php echo htmlspecialchars($movie['plot_summary']); ?></p>
                    <p class="movie-date"><?php echo htmlspecialchars($movie['date']); ?></p>
                    <p class="movie-director"><?php echo htmlspecialchars($movie['director']); ?></p>
                    <input type="hidden" class="movie-video-url" value="<?php echo htmlspecialchars($movie['video_url']); ?>">
                   
                </div>
            </div>
            <?php $index++;                 // this is the index for the movies. first movie has index 1, second has 2, ...?>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="no-movies">No movies found.</p>
    <?php endif; ?>
</div>

<script>
    //data-index aris titoeuli movie-s indexi
    $(document).ready(function() {                   // Code inside this block executes when the document (HTML) is fully loaded and parsed.
        $('.movie').click(function() {               // When any .movie element is clicked, the function inside .click() will execute.
            var index = $(this).data('index');      //this refers to the specific movie element that was clicked.  .data is a method, it retrieves the value stored in the data-index attribute of the current element('this')
            var videoUrl = $('.movie[data-index="' + index + '"] .movie-video-url').val(); //if index equals 1, then, movie[data-index="1"] selects elements with class movie and data-index="1"
            if (videoUrl) {
                // Open the video in a new window/tab
                window.open(videoUrl, '_blank');
            } else {
                alert('No video URL found for this movie.');
            }
        });
    });
</script>

<?php
require_once 'includes/footer.php';
?>

</body>
</html>
