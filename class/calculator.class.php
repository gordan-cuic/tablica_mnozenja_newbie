<?php

$servername = "localhost";
$username = "tablicni_mnozator";
$password = "tablicni_mnozator";
$dbname = "tablica_mnozenja_1";

if (isset($_POST['execute'])) {
    $execute = $_POST['execute'];
    $data = $_POST['data'];
    switch ($execute) {
        case "insert":
            // konekcija na bazu
            //$conn = new mysqli($servername, $username, $password, $dbname);
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // provjera konekcije
            if (!$conn) {
                die('Could not connect: ' . mysqli_error($conn));
            }
            //mysqli_select_db($conn,"ajax_demo");

            // izvlacenje varijabli iz requesta
            $factor1 = $data['factor1'];
            $factor2 = $data['factor2'];
            $result = $data['result'];

            // check if vars are right data type
            foreach (array($factor1, $factor2, $result) as $value) {
                if (strlen($value) > 3) {
                    die('Wrong data type in variable');
                }
            }
            
            $values = $factor1 . ", " . $factor2 . ", " . $result;
            $sql = "INSERT INTO povijest_rezultata (factor1, factor2, result) VALUES (" . $values . ")";

            if ($conn->query($sql) === TRUE) {
                $last_id = $conn->insert_id;
                echo "New record created successfully with ID " . $last_id;
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
            break;
        default:
            $reply = "Unknown action in POST['execute']: " . $execute;
            echo $reply;
            break;
    }
} else {
    echo "Didn't receive POST['execute']: not set";
}
?>