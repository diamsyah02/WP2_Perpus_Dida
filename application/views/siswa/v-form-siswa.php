<html>

<head>
  <title>Form Input Siswa</title>
</head>

<body>
  <center>
    <form action="<?= base_url('siswa/save'); ?>" method="post">
      <table>
        <tr>
          <th colspan="3">
            Form Input Data Siswa
          </th>
        </tr>
        <tr>
          <td colspan="3">
            <hr>
          </td>
        </tr>
        <tr>
          <th>NIS</th>
          <th>:</th>
          <td>
            <input type="text" name="nis" id="nis" placeholder="nis...">
          </td>
        </tr>
        <tr>
          <th>Nama</th>
          <td>:</td>
          <td>
            <input type="text" name="nama" id="nama" placeholder="nama...">
          </td>
        </tr>
        <tr>
          <th>Kelas</th>
          <td>:</td>
          <td>
            <input type="text" name="kelas" id="kelas" placeholder="kelas...">
          </td>
        </tr>
        <tr>
          <th>Tempat, Tanggal Lahir</th>
          <td>:</td>
          <td>
            <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="tempat lahir..."><br/>
            <input type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal lahir...">
          </td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>:</td>
          <td>
            <textarea name="alamat" id="alamat" placeholder="alamat..."></textarea>
          </td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>:</td>
          <td>
            <input type="radio" name="jk" id="jk" value="L">Laki-laki <br/> 
            <input type="radio" name="jk" id="jk" value="P">Perempuan 
          </td>
        </tr>
        <tr>
          <th>Agama</th>
          <td>:</td>
          <td>
            <select name="agama" id="agama">
              <option value="">Pilih Agama</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Budha">Budha</option>
              <option value="Hindu">Hindu</option>
              <option value="Protestan">Protestan</option>
              <option value="Konghucu">Konghucu</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" align="center">
            <input type="submit" value="Submit">
          </td>
        </tr>
      </table>
    </form>
  </center>
</body>

</html>