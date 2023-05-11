<style></style>
<?php 
   
	$sql ="select * from book ";
	$sqlexec = $db->prepare($sql);
	$sqlexec ->execute();
	$result = $sqlexec ->fetchAll();
	echo('<div id=list_book">');
	foreach ($result as $row ) {
		echo("<div class='a_book'> <a href=\"?page=livre/". $row['id_book'] ."\"><img src='".$row['img']."' class='book_cover'><br><h4 class='book_title'>".$row['title']."</h4><br></a></div>");

	}
	echo("</div>");
?>