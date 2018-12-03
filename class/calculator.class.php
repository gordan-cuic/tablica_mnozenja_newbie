<?php

$servername = "localhost";
$username = "tablicni_mnozator";
$password = "tablicni_mnozator";
$dbname = "tablica_mnozenja_1";

if (isset($_POST['execute'])) {
    // pokupi podatke iz request-a
    $execute = $_POST['execute'];
    $data = $_POST['data'];

    // konekcija na bazu
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // provjera konekcije
    if (mysqli_connect_errno()) {
        $msg  = "Error while connecting to database: <br>" . mysqli_connect_error();
        header('HTTP/1.1 500 ' . $msg);
        die($msg);
    } else {
        switch ($execute) {       
            case "insert":
                // izvlacenje varijabli iz requesta
                $factor1 = $data['factor1'];
                $factor2 = $data['factor2'];
                $result = $data['result'];
    
                // ok, malo cudno ali odradjuje posao: provjeravam da li je vrijednost
                // varijable duza od 3 (nema injectiona koji se radi u 3 char-a... barem mislim :/ )
                foreach (array($factor1, $factor2, $result) as $value) {
                    if (strlen($value) > 3) {
                        $msg  = "Input field value excedes 3! No way that could happen when multiplying numbers form 1 to 10!";
                        header('HTTP/1.1 500 ' . $msg);
                        die($msg);
                    }
                }
                // generiram query
                $values = $factor1 . ", " . $factor2 . ", " . $result;
                $sql = "INSERT INTO povijest_rezultata (factor1, factor2, result) VALUES (" . $values . ")";
                // izvrsavam query
                if ($conn->query($sql) === TRUE) {
                    // if ok, uzimam ID koji je dobio
                    $last_id = $conn->insert_id;

                    // pripremam i vracam response
                    $msg  = "New record created successfully with ID " . $last_id;
                    $resp = array("msg"=> $msg);
                    echo json_encode($resp);
                } else {
                    // ne valja query, vrati internal err
                    $msg  = "Error while inserting to database: <br>Failed query: " . $sql . "<br>" . $conn->error;
                    header('HTTP/1.1 500 ' . $msg);
                    die($msg);
                }
                // zatvaram konekciju
                $conn->close();
                break;
            default:
                // hendlam neispravni 'execute' s forontend-a
                $msg = "Bad request: Unknown action in POST['execute']: " . $execute;
                header('HTTP/1.1 400 ' . $msg);
                die($msg);
        }
    }
} else {
    // hendlam slucaj kad se ne poalje 'execute' s forontend-a
    $msg = "Bad request: Didn't receive POST['execute']: not set";
    header('HTTP/1.1 400 ' . $msg);
    die($msg);
}
?>