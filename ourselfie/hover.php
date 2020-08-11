<!DOCTYPE html>
<html>
<head>
       <!-- this section use for image -->
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<style type="text/css">
        div{
                font-family: algerian;
               
                font-color: #331d75;
        }
        .container {
  padding: 16px;
  background-color: #4cd8ed;


}

}
.like
{
  color: red;
}



</style>

</head>
<body style="background-color: #b2eaed ">
<font size="06" color="#331d75">
<form>
          >
                






<?php
include 'hide navbar.php';


session_start();

$USER = $_SESSION['USER'];

include("connection.php");
error_reporting(0);
$query = "select * from user where gender=gender";
$data = mysqli_query($con,$query);





if (isset($_SESSION['USER'])) 
{
         
 $connect = mysqli_connect("localhost", "root", "", "ourselfie");  
 $query = "  
      SELECT articles.id, articles.title,  
      COUNT(article_likes.id) as likes,  
      GROUP_CONCAT(user.name separator '|') as liked  
      FROM  
      articles  
      LEFT JOIN article_likes  
      ON article_likes.article = articles.id  
      LEFT JOIN user  
      ON article_likes.user = user.id  
      GROUP BY articles.id  
 ";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
  ?>
  <div class="like">
    <?php
      echo "<a href='$row[title]'> <img src='".$row['title']."'  style='width:20%'/></a><br>";
      ?>  
  </div>
  <div>
    <?php
      echo '<a href="home.php?type=article&id='.$row["id"].'">Like</a>';

      echo ' '.$row["likes"];  
      if(count($row["liked"]))  
      {  
           $liked = explode("|", $row["liked"]);  
          }  
      ?>
      </div>
      <?php
 }  
 if(isset($_GET["type"], $_GET["id"]))  
 {  
      $type = $_GET["type"];  
      $id = (int)$_GET["id"];  
      if($type == "article")  
      {  
           $query = "  
           INSERT INTO article_likes (user, article)  
           SELECT {$_SESSION['USER']}, {$id} FROM articles   
                WHERE EXISTS(  
                     SELECT id FROM articles WHERE id = {$id}) AND  
                     NOT EXISTS(  
                          SELECT id FROM article_likes WHERE user = {$_SESSION['USER']} AND article = {$id})  
                          LIMIT 1  
           ";  
           mysqli_query($connect, $query);
           header("location:hover.php");  
             
      }  
 }  
?>


<?php
}
else
{
        header("location:login.php");
}

?>
        </table>

</form>
</font>
</body>
</html>