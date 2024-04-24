<html>

<head>
    <title>Tampil Data Matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">Tampil Data Mata Kuliah</th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode Mata Kuliah</th>
                <td>:</td>
                <td>
                    <?= isset ($kode_mk) ? $kode_mk : ''; ?>
                </td>
            </tr>
            <tr>
                <th>Nama Mata Kuliah</th>
                <td>:</td>
                <td>
                    <?= isset ($nama_mk) ? $nama_mk : ''; ?>
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <?= isset ($sks) ? $sks : ''; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center;">
                    <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>