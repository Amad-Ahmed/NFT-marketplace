@php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "astra";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
}
else{
    echo '<script>alert("Connection Failed")</scripalert>';
}
@endphp