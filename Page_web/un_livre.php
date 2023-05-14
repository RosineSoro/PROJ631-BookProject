<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet"  href="un_livre.css">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

<?php
function find_id_book()
{
    $url = $_SERVER['REQUEST_URI']; 

  $livre="";
  $id_li="";
  $i=0;
  
  while(! str_contains($livre, "livre")){
    $livre .= $url[$i];
    ++$i; 
    //echo($i ."<br>");
      }
    ++$i;
    $bool = $i  <  mb_strlen($url, 'UTF-8') and $url[$i]!="/";
    echo($bool."<br>");
    while($i  <  mb_strlen($url, 'UTF-8') and $url[$i]!="/"){
      $id_li .= $url[$i];

      ++$i; 
    }
    return $id_li;

} ?>




  <?php 

    $id_li = find_id_book();
    $url ="";
    $sql = "select * from book where id_book=". $id_li;
    $sqlexec = $db ->prepare($sql);
    $sqlexec -> execute();
    $result = $sqlexec -> fetchAll();
    foreach($result as $row){
      echo("<div class='book-info'>");
      echo("<img src=\"". $row['img']."\" class='book_cover'>");
      echo("<div class='book-details'>");
      echo("<h1>".$row['title']."</h1> ");
      echo("<p>".$row['plot']."</p>");
      
    }
    
  ?>

  <?php
  /* ajouter un commentaire dans la bdd format heure YYYY-MM-DD hh:mm:ss*/ 
  if (isset($_POST['comment'])){
    $today = date("Y-m-d H:i:s");
    if(isset($_SESSION['id_user'])){
      echo($_SESSION['id_user']);
      $sql2="insert into review(id_acc,id_book,content,post_date) values(".$_SESSION['id_user'].",".$id_li.",'".$_POST['comment']."','".$today."')";
      
      $sqlexec2 = $db -> prepare($sql2);
      $sqlexec2 -> execute();
    }
    else{
      echo("veuillez vous connecter");
    }
  }
  else{
    echo("fonctionne pas");
  }
  
  ?>

<div class='book-comments'>

<form class="comments" action="" method="post">
  <textarea name="comment" class="comment-bar" placeholder="Laissez un commentaire"> </textarea>
  <button type ="submit"class="comment-submit-button">Envoyer</button>
</form>
<button type="submit" class="comment-print-button" name="printComment">Afficher les commentaires</button>
</div>
</div>

 <!--code pour les genres : SELECT * FROM book b JOIN genre g ON b.id_genre = g.id_genre GROUP BY name-->