<?php
    $conn=mysqli_connect("127.0.0.1:3306","root","wndjs1212");
    mysqli_select_db($conn,'pinsert');
    $result=mysqli_query($conn,"select * from topic");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pinsert</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost:81/style.css?after">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body id="back" class="white">


    <div style="text-align: center">
    <header>
        <a class ="indexing" href="http://localhost:81/index.php"><img src="pinsert.png" width="300"></a>
    </header>
    </div>

    <nav>
        <ol id='menubar' class="menus">
            <center>
            <?php
              while($row=mysqli_fetch_assoc($result)){
                echo '<li><a class="indexing" href="http://localhost:81/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</li></a>'."\n";
            }
            ?>
            </center>
        </ol>
    </nav>

<article>
<p><a id="test">this is test</a></p>
<a href="http://localhost:81/write.php">Write</a>
<?php

    if(empty($_GET['id'])==false){
        $sql='select * from topic where id='.$_GET['id'];
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
    
        echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
        echo '<p>'.strip_tags($row['description'],'<a><h1><h2><h3><h4><h5>').'</p>';
    }else{
        echo file_get_contents("0.txt");
    }

?>
</article>

<script src="http://localhost:81/script2.js?after"></script>

<div id="script1">
<script src="http://localhost:81/script.js?after"></script>
</div>

</body>

</html>