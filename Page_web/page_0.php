<style><?php include("page_0.css");?> </style>

<div id="caroussel">
         	<?php 
            
         	$sql ="select * from book Limit 10";
         	$sqlexec = $db->prepare($sql);
         	$sqlexec ->execute();
         	$result = $sqlexec ->fetchAll();
         	foreach ($result as $row ) {
         		echo("<div class='book'><img src='".$row['img']."' class='book_cover'><br><h4 class='book_title'>".$row['title']."</h4><br></div>");

         	}
         		?>
</div>
