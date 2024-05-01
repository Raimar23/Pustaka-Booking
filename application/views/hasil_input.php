<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/siswa.css'); ?>">
    <title>Hasil Input Data Siswa</title>
</head>
<body>
    <h2>Hasil Input Data Siswa</h2>
    <?php if(isset($siswa)): ?>
        <p>Nama: <?php echo $siswa['nama']; ?></p>
        <p>NIS: <?php echo $siswa['nis']; ?></p>
        <p>Kelas: <?php echo $siswa['kelas']; ?></p>
        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
    <?php endif; ?>
    <br>
    <a href="<?php echo base_url('dlema/input_data'); ?>">Kembali ke Form Input</a>
</body>
</html>
