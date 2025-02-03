<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';
    
    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case 'tambah':
                $result = $num1 + $num2;
                break;
            case 'kurang':
                $result = $num1 - $num2;
                break;
            case 'kali':
                $result = $num1 * $num2;
                break;
            case 'bagi':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error: Pembagian dengan nol!';
                }
                break;
            default:
                $result = 'Operator tidak valid';
                break;
        }
    } else {
        $result = 'Masukkan bilangan bulat atau desimal';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Angka pertama" required>
        <br>
        <input type="text" name="num2" placeholder="Angka kedua" required>
        <br>
        <select name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <br>
        <button type="submit">Hitung</button>
    </form>
    
    <?php if (isset($result)) { ?>
        <h3>Hasil: <?php echo $result; ?></h3>
    <?php } ?>
</body>
</html>
