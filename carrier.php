<!DOCTYPE HTML>
<html>

<head>
    <title>Carrier</title>
</head>

<body>
    <?php
    include "conn.php";
    $carrier = $_GET['carrier'];
    $cursor = $db->find(['carrier'=>$carrier]);
    $result = "<p>You can watch these films with $carrier" . ": </p></ol>";
    foreach($cursor as $document){
        $film = $document['title'];
        $result .= "<li>$film</li>"; 
    }
    $result .="</ol>";
    echo($result);
    echo "<script>localStorage.setItem('$carrier', '$result')</script>"
    ?>
</body>
<html>