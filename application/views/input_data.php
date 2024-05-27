<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/input.css'); ?>">
    <title>Form Input Data Siswa</title>
</head>
<body>
    <h2>Form Input Data Siswa</h2>
    <form action="<?php echo base_url('dlema/proses_input'); ?>" method="post">
        <label>Nama Siswa:</label><br>
        <input type="text" name="nama"><br>
        
        <label>NIS:</label><br>
        <input type="text" name="nis"><br>
        
        <label>Kelas:</label><br>
        <input type="text" name="kelas"><br>
        
        <label>Tanggal Lahir:</label><br>
        <input type="date" name="tanggal_lahir"><br>
        
        <label>Tempat Lahir:</label><br>
        <input type="text" name="tempat_lahir"><br>
        
        <label>Alamat:</label><br>
        <textarea name="alamat"></textarea><br>
        
        <label>Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
    
        <label>Agama:</label><br>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
