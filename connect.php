<?php
 $data = filter_input(INPUT_POST, 'Data');
 $produkt = filter_input(INPUT_POST, 'Produkt');
 $ilosc = filter_input(INPUT_POST, 'Ilosc');
 $miejsce = filter_input(INPUT_POST, 'Miejsce');
 if (!empty($produkt)){
if (!empty($ilosc)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "skaner";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO skaner (data, produkt, ilosc, miejsce)
values ('$data','$produkt','$ilosc','$miejsce')";
if ($conn->query($sql)){
echo "Rekord zostal dodany do bazy danych";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo " Kod produktu nie moze byc pusty";
die();
}
}
else{
echo "Ilosc nie moze byc pusta";
die();
}
?>
<html>
<head>
    <style>
        body{
            font-size: 50px;
			font-family: Arial;
			font-weight: bold;
			background-color: #AAA;
        }
        input{
			width: 720px;
            line-height: 350%;
            font-size: 50px;
			font-weight: bold;
			border: 4px solid #000;
			text-align: center;
        }
        input[type=button]{
            width: 960px;
            height: 300px;
			font-weight: bold;
        }
    </style>
</head>
<body>
    <br>
    <form>
    <h1> REKORD DODANY</h1>
<input type="button" value="DODAJ NASTEPNY REKORD" onclick="window.location.href='index.html'" />
</form>
</body>
</html>