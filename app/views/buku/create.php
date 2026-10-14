<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Data Buku</h2>
    <form method="post" action="index.php?page=buku&action=store">
        <label>ISBN</label><br>
        <input type="text" name="isbn" required><br><br>

        <label>Judul Buku</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" required><br><br>

        <label>Penerbit</label><br>
        <input type="text" name="penerbit" required><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" min="1000" max="2099" required><br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=buku">Batal</a>
    </form>
</body>
</html>