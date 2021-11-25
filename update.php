<?php 

	require 'function.php';

    //get data
	$id = $_GET["id"];

	$data_mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

	if(isset($_POST["submit"])){	
		//check data
		if(update($_POST) > 0){
			echo "
				<script>
					alert('Data Berhasil Diupdate');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Data Gagal Diupdate');
					document.location.href = 'index.php';
				</script>
			";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap');
        *{
            font-family: 'Quicksand', sans-serif;
        }
        legend {
            color: black;
            padding: 8px;
            background-color: #bababa;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0.3, 0.3, 0.3, 0.3);
        }
        fieldset {
            max-width: 350px;
            border-radius: 5px;
            border-color: black;
            background-color: #EADEB8;
            color: black;
        }
        table {
            float: left;
            color: black;
            border: none;
            width: 100%;
            padding: 10px;
            padding-bottom: 20px;
        }
        button {
            cursor: pointer;
            color: white;
            background-color: red;
            font-size: 14px;
            width: 120px;
            border-radius: 5px;
            border: none;
            padding: 8px;
            box-shadow: 0 4px 8px 0 rgba(0.1, 0.1, 0.1, 0.1);
        }
        button:hover {
            background-color: #f05959;
        }
        #btn_add {
            text-align: center;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Form Pendaftaran Mahasiswa Baru Teknik Informatika 2021</h2>
    <p>Silahkan diisi form untuk mengupdate data mahasiswa baru informatika ITERA 2021</p>
	<form action="" method="POST">
        <fieldset>
            <legend>Personal Information</legend>
            <input type="hidden" name="id" value="<?= $data_mhs["id"]?>">
            <table>
                <tr>    
                    <td>Jalur</td>
                    <td>:</td>
                    <td><select name="jalur" id="jalur" value="<?= $data_mhs["jalur"] ?>">
                        <option value="SNMPTN">SNMPTN</option>
                        <option value="SBMPTN">SBMPTN</option>
                        <option value="Mandiri">Mandiri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" id="nama" name="nama" value="<?= $data_mhs["nama"] ?>"></td>
                </tr>
                <tr>
                    <td>Nomor Telpon</td>
                    <td>:</td>
                    <td><input type="text" id="telpon" name="telpon" value="<?= $data_mhs["telpon"] ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><select name="gender" id="gender" value="<?= $data_mhs["gender"] ?>">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Asal SMA</td>
                    <td>:</td>
                    <td><input type="text" id="sma" name="sma" value="<?= $data_mhs["sma"] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" id="email" name="email" value="<?= $data_mhs["email"] ?>"></td>
                </tr>
            </table>
            <div id="btn_add"><button type="submit" name="submit">Update Data</button></div>
        </fieldset>
    </form>
</body>
</html>	