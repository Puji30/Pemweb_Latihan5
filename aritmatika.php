<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Banyaknya Suku ke-n</title>
</head>

<body>
    <h2>Barisan Aritmatika</h2>
    <form action="" method="POST">
        <div>
            <table>
                <tr>
                    <td> Suku Pertama
                    <td><input type="number" name="a" required></td>
                    </td>
                </tr>
                <tr>
                    <td>Beda
                    <td><input type="number" name="b"  required></td>
                    </td>
                </tr>
                <tr>
                    <td>Banyaknya suku n
                    <td><input type="number" name="Un"  required></td>
                    </td>
                </tr>
            </table>
        </div>
        <input type="submit" name="submit" value="Hasil">
    </form>
    <?php
    if (isset($_POST['submit'])){
        $suku1 = $_POST['a'];
        $suku2 = $_POST['b'];
        $suku_n = $_POST['Un'];  
    
       $hasil1 = $suku_n - 1;
       $hasil2 = $hasil1 * $suku2;
       $hasil = $suku1 + $hasil2;
       echo '<br>';
       echo "Suku Ke- ".$_POST['Un'] ;
       echo "  adalah  ";
       echo $hasil;
        
    }
    ?>
</body>

</html>