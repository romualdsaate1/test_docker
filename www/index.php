<?php
$host = 'db';
$dbname = 'testdb';
$user = 'admin';
$pass = 'bn!er$po23';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>Datenbankverbindung erfolgreich !</h1>";

    $stmt = $pdo->query("SELECT * FROM test_table");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h2>Testdaten :</h2>";
    echo "<table border='1'>";
    foreach ($results as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

} catch(PDOException $e) {
    echo "<h1>Verbindungsfehler :</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?>
