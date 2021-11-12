<?php
function proses($bil1, $bil2, $operator){
    $hasil = 0;

    if($operator == '+'){
        $hasil = $bil1 + $bil2;
    }
    elseif($operator == '-'){
        $hasil = $bil1 - $bil2;
    }
    elseif($operator == '*'){
        $hasil = $bil1 * $bil2;
    }
    elseif($operator == '/'){
        $hasil = $bil1 / $bil2;
    }
    elseif($operator == '%'){
        $hasil = $bil1 % $bil2;
    }
    return $hasil;
}

if(isset($_POST['value_hasil'])){
    $i=0;
    $operator = ['+','-','*','/','%'];
    $bil1 = $_POST['value_bil1'];
    $bil2 = $_POST['value_bil2'];

    while($i<5){
        if($operator[$i]=='+'){
            $jumlah = proses($bil1, $bil2, $operator[$i]);
        }
        elseif($operator[$i]=='-'){
            $kurang = proses($bil1, $bil2, $operator[$i]);
        }
        elseif($operator[$i]=='*'){
            $kali = proses($bil1, $bil2, $operator[$i]);
        }
        elseif($operator[$i]=='/'){
            $bagi = proses($bil1, $bil2, $operator[$i]);
        }
        elseif($operator[$i]=='%'){
            $mod = proses($bil1, $bil2, $operator[$i]);
        }
        $i++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Angka Pertama</td>
                <td>:</td>
                <td>
                    <input type="text" name="value_bil1">
                </td>
            </tr>

            <tr>
                <td>Angka Kedua</td>
                <td>:</td>
                <td>
                    <input type="text" name="value_bil2">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="value_hasil">Hasil Akhir</button>
                </td>
            </tr>
        </table>
    </form>
    
    <div id="operasi">
        <br>
        <p><b>Berikut Merupakan Hasil Dari Setiap Operasi</b></p>
        <p>PENJUMLAHAN</p>
        <p>Operator : +</p>
        <p>Hasil : 
            <?php 
            if(isset($jumlah)){
                echo $jumlah;
            }
            else {
                echo 0;
            }
            ?>
        </p>
        <br>
        <p>PENGURANGAN</p>
        <p>Operator : -</p>
        <p>Hasil : 
            <?php 
            if(isset($kurang)){
                echo $kurang;
            }
            else {
                echo 0;
            }
            ?>
        </p>
        <br>
        <p>PERKALIAN</p>
        <p>Operator : *</p>
        <p>Hasil : 
            <?php 
            if(isset($kali)){
                echo $kali;
            }
            else {
                echo 0;
            }
            ?>
        </p>
        <br>
        <p>PEMBAGIAN</p>
        <p>Operator : /</p>
        <p>Hasil : 
            <?php 
            if(isset($bagi)){
                echo $bagi;
            }
            else {
                echo 0;
            }
            ?>
        </p>
        <br>
        <p>MODULUS</p>
        <p>Operator : %</p>
        <p>Hasil : 
            <?php 
            if(isset($mod)){
                echo $mod;
            }
            else {
                echo 0;
            }
            ?>
        </p>
    </div>
</body>
</html>