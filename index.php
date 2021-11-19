<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Praktikum Pemweb Minggu 6</title>
</head>
<style>
    body {
        background-image: url('pict/allFruit.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<body>
    <div id="form_buah">
        <form action="hitungBuah.php" method="POST" id="buah" name="buah">
            <legend><h1><b>--- FORM PEMBELIAN TOKO BUAH ITERA ---</b></h1></legend>
            <br>
            <table>
                <tr>
                    <td><img src="pict/mangga.png" height=30 width=30></td>
                    <td>Mangga (Rp.15.000/kg)</td>
                    <td>:</td>
                    <td><input type="text" id="mangga" name="mangga" onchange="setResult()"></td>
                </tr>
                <tr>
                    <td><img src="pict/jambu.png" height=30 width=30></td>
                    <td>Jambu (Rp.13.000/kg)</td>
                    <td>:</td>
                    <td><input type="text" id="jambu" name="jambu" onchange="setResult()"></td>
                </tr>
                <tr>
                    <td><img src="pict/salak.png" height=32 width=32></td>
                    <td>Salak (Rp.10.000/kg)</td>
                    <td>:</td>
                    <td><input type="text" id="salak" name="salak" onchange="setResult()"></td>
                </tr>
                <tr>
                    <td><img src="pict/glasses.png" height=30 width=30></td>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td><input id="total" name="total" readonly></td>
                </tr>
            </table>
            <br>
            <button type="submit">Cetak Nota</td>
        </form>
    </div>
    <script type="text/javascript">
        function setResult(){
            var total = document.getElementById("total");
            var mangga = document.getElementById("mangga").value * 15000;
            var jambu = document.getElementById("jambu").value * 13000;
            var salak = document.getElementById("salak").value * 10000;
            console.log(mangga + jambu + salak);
            var result = mangga + jambu + salak;
            total.value = result;
        }
    </script>
</body>
</html>