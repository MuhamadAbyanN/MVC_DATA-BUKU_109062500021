<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Data Buku</h2>
    <form method="post" action="index.php?page=buku&action=update">
        <input type="hidden" name="id" value="<?= $buku['id'] ?>">

        <label>ISBN</label><br>
        <input type="text" name="isbn" value="<?= htmlspecialchars($buku['isbn']) ?>" required><br><br>

        <label>Judul Buku</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($buku['judul']) ?>" required><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" value="<?= htmlspecialchars($buku['penulis']) ?>" required><br><br>

        <label>Penerbit</label><br>
        <input type="text" name="penerbit" value="<?= htmlspecialchars($buku['penerbit']) ?>" required><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" value="<?= htmlspecialchars($buku['tahun_terbit']) ?>" min="1000" max="2099" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=buku">Batal</a>
    </form>
</body>
</html>