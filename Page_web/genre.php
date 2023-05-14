<style>
<?php include("livre.css"); ?>
</style>

<form method="post" action="Base_page.php?page=genre">
    <label for="genre_book"></label><br>
    <select name="genre_book" id="genre_book">
        <?php 
            $sql = "SELECT * FROM genre";
            $sqlexec = $db->prepare($sql);
            $sqlexec ->execute();
            $result = $sqlexec ->fetchAll();
            foreach ($result as $row ) {
                echo ("<option value=" .$row['id_genre']." selected>". $row['name']."</option>");
            }
        ?>
    </select>
    <button type='submit'>envoyer</button>
</form>
        

<div id="list_book">
    <?php 
        if (isset($_POST["genre_book"])){
            $sql ="select * from book where id_genre = ". $_POST['genre_book'];
            $sqlexec = $db->prepare($sql);
            $sqlexec ->execute();
            $result = $sqlexec ->fetchAll();
            foreach ($result as $row ) {
                echo("<div class='a_book'> <a href=\"?page=livre/". $row['id_book'] ."\"><img src='".$row['img']."' class='book_cover'><h4 class='book_title'>".$row['title']."</h4></a></div>");

            }
        }
    ?>
</div>