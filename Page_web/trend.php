<style>
	<?php include("livre.css");?>
</style>
<div id="list_book">
<?php 
   
	$sql ="select * from book ORDER BY sales DESC";
	$sqlexec = $db->prepare($sql);
	$sqlexec ->execute();
	$result = $sqlexec ->fetchAll();
	foreach ($result as $row ) {
		echo("<div class='a_book'> <a href=\"?page=livre/". $row['id_book'] ."\"><img src='".$row['img']."' class='book_cover'><h4 class='book_title'>".$row['title']."</h4></a></div>");

	}
?>
</div>