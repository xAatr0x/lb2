<!DOCTYPE HTML>
<html>

<head>
    <title>Lb2</title>
    <script>
        function getcarrier(){
        let key = document.getElementById("carrier").value;
        let value = localStorage.getItem(key);
        document.getElementById("localStorage").innerHTML = value;
        }
        function getactor(){
            let key = document.getElementById("actor").value;
            let value = localStorage.getItem(key);
            document.getElementById("localStorage").innerHTML = value;
        }
        function getdate(){
            let key = document.getElementById("date").value;
            let value = localStorage.getItem(key);
            document.getElementById("localStorage").innerHTML = value;
        }
    </script>
</head>

<body>
    <form method="GET" action="carrier.php">
    <p>Films by carrier <select name="carrier" id="carrier" onchange="getcarrier()">
            <?php
            include 'conn.php';
            $carrier = $db->distinct("carrier");

            foreach ($carrier as $document) {
                echo "<option>";
                print($document);
                echo "</option>";
            }
            echo '</select>';
            ?>
        </select>
        <button> ОК </button></p>
    </form>

    <form method="GET" action="actor.php">
        <p>Films by actor <select name="actor" id="actor" onchange="getactor()">
        <?php
            include 'conn.php';
            $actor = $db->distinct("actor");

            foreach ($actor as $document) {
                echo "<option>";
                print($document);
                echo "</option>";
            }
            echo '</select>';
            ?>
        </select>
        <button> ОК </button></p>
    </form>

    <form method="GET" action="date.php">
        <p>Films by date <select name="date" id="date" onchange="getdate()">
        <?php
            include 'conn.php';
            $carrier = $db->distinct("date");
            foreach ($carrier as $document) {
                echo "<option>";
                print($document);
                echo "</option>";
            }
            echo '</select>';
            ?>
        </select>
        <button> ОК </button> </p>
    </form>
<p> Result of onchange (<b>localStorage</b>): </p>
<p id="localStorage"></p>
</body>

</html>