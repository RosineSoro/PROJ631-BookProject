

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

}
?>




<?php 

  $id_li = find_id_book();
  $url ="";
  $sql = "select * from book where id_book=". $id_li;
  $sqlexec = $db ->prepare($sql);
  $sqlexec -> execute();
  $result = $sqlexec -> fetchAll();
  foreach($result as $row){
    echo("<img src=\"". $row['img']."\" class=book_cover> <h1>".$row['title']."</h1> ");
  }

    
?>