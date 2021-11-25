<?php 
	
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>	

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap');
        *{
            font-family: 'Quicksand', sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th {
            text-align: center;
            padding: 7px;
        }
        td {
            text-align: left;
            padding: 7px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
        a {
            text-decoration: none;
            color: white;
        }
        #btn_main {
            padding: 10px;
            background-color: black; 
            border-radius: 15px; 
            cursor: pointer;
            color: white; 
            font-size: 16px;
            border: none;
        }
        #btn_update {
            padding: 5px; 
            background-color: green; 
            color: white; 
            border-radius: 5px; 
            cursor: pointer;
            border: none;
        }
        #btn_delete {
            padding: 5px; 
            background-color: red; 
            color: white; 
            border-radius: 5px; 
            cursor: pointer;
            border: none;
        }
        #btn_main:hover {
            font-weight: bolder;
        }
        #btn_update:hover {
            background-color: #5bf059;
        }
        #btn_delete:hover {
            background-color: #f05959;
        }
    </style>
</head>
<body>
    <h2>Halaman Admin Pendataan Mahasiswa Baru Teknik Informatika 2021</h2>
	<table border='1' cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Jalur</th>
			<th>Nama</th>
			<th>Nomor Telpon</th>
			<th>Jenis Kelamin</th>
			<th>Asal SMA</th>
            <th>Email</th>
            <th>Menu</th>
		</tr>

		<?php $i=1; ?>
		<?php foreach( $mahasiswa as $row):?>
			<tr>
				<td><?= $i ?></td>
                <td><?= $row["jalur"] ?></td>
                <td><?= $row["nama"] ?></td>
				<td><?= $row["telpon"] ?></td>
				<td><?= $row["gender"] ?></td>
				<td><?= $row["sma"] ?></td>
                <td><?= $row["email"] ?></td>
                <td>
					<button id="btn_update"><a href="update.php?id=<?= $row["id"];?>">Update</a></button>
					<button id="btn_delete"><a href="delete.php?id=<?= $row["id"];?>" onclick="return contifrm('Apakah anda yakin ingin menghapus ?')">Delete</a></button>
				</td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
    <br>
    <button id="btn_main"><a href="LandingPage.php">Halaman Utama</a></button>
    <button id="btn_main"><a href="add.php">Tambah Mahasiswa Lainnya</a></button>
</body>
</html>