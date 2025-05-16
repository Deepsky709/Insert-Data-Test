<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Masukkan data ke puzzle games</h1>
    <form action="proses2.php" method="get">
        <div>
            <label>Id Games</label>
            <input type="number" name="id">
        </div>
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Harga</label>
            <input type="number" name="harga">
        </div>
        <div>
            <label>Review</label>
            <input type="number" name="review">
        </div>
        <div>
            <label>Developer</label>
            <input type="text" name="developer">
        </div>
        <div>
            <button input="submit" value="Tambahkan Games">Tambahkan Games</button>
        </div>
    </form>
</body>
</html>