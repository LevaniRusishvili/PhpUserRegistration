
<?php 

if(isset($_POST['submit'])) {
    require_once 'database.php';
    $title=$_POST['title'];
    $poster_url=$_POST['poster_url'];
    $date=$_POST['date'];
    $plot_summary=$_POST['plot_summary'];
    $director = $_POST['director'];
    if(empty($title) || empty($poster_url) || empty($date) || empty($plot_summary) || empty($director)) {          //tu romelimeshi araferi chagviweria
        header("Location: ../index.php?error=emptyfields");   //home page  
        exit();   
    } else {
        $sql = "SELECT * FROM filmi WHERE title = ?";
        $stmt = mysqli_stmt_init($conn); 
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");   //home page  
            exit();  
        } else {
            mysqli_stmt_bind_param($stmt, "s", $title);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_store_result($stmt);
            $rowCount=mysqli_stmt_num_rows($stmt);
            if($rowCount>0) {
                header("Location: ../movie.php?error=titletaken");   
                exit(); 
            } else {
                $sql="INSERT INTO filmi (title, poster_url, date,plot_summary, director) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../movie.php?error=sqlerror");     
                    exit(); 
                } else {
                    mysqli_stmt_bind_param($stmt, "sssss",$title, $poster_url, $date, $plot_summary,$director);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../movie.php?success=movieadded");     
                        exit(); 
                }
            }
            
        }
    }
    mysqli_stmt_close($stmt);  
    mysqli_close($conn);
}

?>
