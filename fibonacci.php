<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Deret Fibonacci</title>
</head>

<body>
    <h2>Deret Fibonacci</h2>
    <form action="" method="POST">
        <div>
            <table>
                <tr>
                    <td> Bilangan ke-1
                    <td><input type="number" name="input1" required></td>
                    </td>
                </tr>
                <tr>
                    <td>Bilangan ke-2
                    <td><input type="number" name="input2"  required></td>
                    </td>
                </tr>
                <tr>
                    <td>Deret ke-
                    <td><input type="number" name="jumlah_deret"  required></td>
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" name="submit" value="Hasil">
    </form>
    <?php
    if (isset($_POST['submit'])){
        $angka1 = $_POST['input1'];
        $angka2 = $_POST['input2'];
        $n = $_POST['jumlah_deret'];  
    
        echo " <br> ";
        echo " Suku Deret Fibonaccinya yaitu  ";
        echo "$angka1 $angka2";
       
        for($i =0; $i < $n; $i++){
            $hasil = $angka1 + $angka2;
            echo " ";
            echo $hasil ;
    
            $angka1 = $angka2;
            $angka2 = $hasil;
        }
    }
    ?>
</body>

</html>