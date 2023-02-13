<?php


//connect to database
$conn = mysqli_connect("localhost" , "root" , "root" , "test");


//check the connection
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}

//select data from the table


//check if query is successful


//Close the connection
mysqli_close($conn);

//function display automatically what holds beneathe the products tabel
function fetchData($conn, $keyword) {
    $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. "<br>";
        }
    } else {
        echo "No results found";
    }
}

    //check if the form is submitted
    if(isset($_POST["submit"])){
        $keyword = $_POST["name"];
        fetchData($conn , $keyword);
    }

    //create



?>