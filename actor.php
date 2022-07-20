<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actor</title>
</head>

<body>
<?php
    include "conn.php";
    $actor = $_GET['actor'];
    $cursor = $db->find(['actor'=>$actor]);
    $result = "<p>You can watch these with films $actor" . ": </p></ol>";
    foreach($cursor as $document){
        $film = $document['title'];
        $result .= "<li>$film</li>";
    }
    $result .="</ol>";
    echo $result;
    echo "<script>localStorage.setItem('$actor', '$result')</script>"
    ?>
</body>
<html>