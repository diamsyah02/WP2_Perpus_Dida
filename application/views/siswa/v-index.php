<html>

<head>
  <title>Data Siswa</title>
</head>

<body>
  <center>
    <a href="<?= site_url('siswa');?>">+ Tambah Data</a>
    <table>
      <tr>
        <th>NIS</th>
        <th>:</th>
        <td>
          <?= $data['nis'];?>
        </td>
      </tr>
      <tr>
        <th>Nama</th>
        <td>:</td>
        <td>
          <?= $data['nama'];?>
        </td>
      </tr>
      <tr>
        <th>Kelas</th>
        <td>:</td>
        <td>
          <?= $data['kelas'];?>
        </td>
      </tr>
      <tr>
        <th>Tempat Lahir</th>
        <td>:</td>
        <td>
          <?= $data['tempat_lahir'];?>
        </td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td>:</td>
        <td>
          <?= $data['tanggal_lahir'];?>
        </td>
      </tr>
      <tr>
        <th>Alamat</th>
        <td>:</td>
        <td>
          <?= $data['alamat'];?>
        </td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>:</td>
        <td>
          <?= $data['jk'];?>
        </td>
      </tr>
      <tr>
        <th>Agama</th>
        <td>:</td>
        <td>
          <?= $data['agama'];?>
        </td>
      </tr>
    </table>
  </center>
</body>

</html>