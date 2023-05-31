<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th style="width: 200px">KD - PENYAKIT</th>
        <th>PENYEBAB</th>
        <th>PENANGANAN</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><i class="fa fa-bug"></i> <?php echo "$kdpenyakit"; ?> - <?php echo "$penyakit"; ?></td>
        <td><?php echo "$info"; ?></td>
        <td><span class="badge bg-danger"> <i class="fa  fa-hospital-o faa-pulse animated"></i> <?php echo "$solusi"; ?></span></td>
      </tr>
    </tbody>
  </table>
  <form class='form-horizontal' role='form' method='POST' action='act/data_diagnosa_save.php' enctype='multipart/form-data'>
    <input type="hidden" name="id_user" value="<?php echo "$ru[id_user]"; ?>">
    <input type="hidden" name="id_penyakit" value="<?php echo "$kdpenyakit"; ?>">
    <div class="btn-group">
      <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Simpan Hasil Diagnosa</button>
      <button style="float:right;" class="btn btn-success" onclick="myFunction()"><i class="fa fa-print"></i> Cetak Hasil Diagnosa</button>
      <a href="./tambahdiagnosa" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Diagnosa Kembali</a>
    </div>
  </form>
  <script>
    function myFunction() {
      window.print();
    }
    </script