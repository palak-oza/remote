<?php
$host = 'ep-black-wildflower-a1bsixvh.ap-southeast-1.aws.neon.tech';
$port = '5432';
$dbname = 'postgresql';
$user = 'palak.s.oza';
$password = 'uYQkUzHF54PK';
$distance = $_POST['distance'];
$S_NAME = $_POST['sensorname'];
try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    $pdo = new PDO($dsn);
    echo "Connected to PostgreSQL successfully!";
    //$timestamp = date("Y-m-d H:i:s");
    //$sql = "INSERT INTO sensor1 (time,distance_cm) VALUES (:time,:distance)";
    $sql = "INSERT INTO sensor_1 (dev_name,distance_cm) VALUES (:S_NAME,:distance)";
    $stmt = $pdo->prepare($sql);
    //$stmt->bindParam(':timestamp', $timestamp);
    $stmt->bindParam(':distance', $distance);
    $stmt->bindParam(':S_NAME', $S_NAME);
    $stmt->execute();
    echo "posted successfully!";

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>





/*try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
    $pdo = new PDO($dsn);
    echo "Connected to PostgreSQL successfully!";
    //$timestamp = date("Y-m-d H:i:s");
    //$sql = "INSERT INTO sensor1 (time,distance_cm) VALUES (:time,:distance)";
    $sql = "INSERT INTO sensor_one (dev_name,distance_cm) VALUES (:S_NAME,:distance)";
    $stmt = $pdo->prepare($sql);
    //$stmt->bindParam(':timestamp', $timestamp);
    $stmt->bindParam(':distance', $distance);
    $stmt->bindParam(':S_NAME', $S_NAME);
    $stmt->execute();
    echo "posted successfully!";

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}*/
