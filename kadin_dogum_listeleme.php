<?PHP
    include_once("connection.php");

    $query = "SELECT * FROM kadin_dogum ORDER BY pid DESC"; 
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
    }
    echo json_encode($data);
?>