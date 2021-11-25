<?php 

//connection database
$conn = mysqli_connect("localhost", "root", "", "mhs_baru");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

//insert data
function add($data){
	global $conn;

	$jalur = htmlspecialchars($data["jalur"]);
	$nama = htmlspecialchars($data["nama"]);
	$telpon = htmlspecialchars($data["telpon"]);
	$gender = htmlspecialchars($data["gender"]);
    $sma = htmlspecialchars($data["sma"]);
	$email = htmlspecialchars($data["email"]);  

	$query = "INSERT INTO mahasiswa VALUES
				('', '$jalur', '$nama', '$telpon', '$gender', '$sma', '$email')";
	
    mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

//delete data
function delete($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

//update data
function update($data){
	global $conn;

	$id = $data["id"];
	$jalur = htmlspecialchars($data["jalur"]);
	$nama = htmlspecialchars($data["nama"]);
	$telpon = htmlspecialchars($data["telpon"]);
	$gender = htmlspecialchars($data["gender"]);
    $sma = htmlspecialchars($data["sma"]);
	$email = htmlspecialchars($data["email"]);  

	$query = "UPDATE mahasiswa SET
			jalur = '$jalur', nama = '$nama', telpon = '$telpon', gender = '$gender', sma = '$sma', email = '$email' WHERE id = $id";
	
    mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

?>