<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
  <link rel="stylesheet" type="text/css" href="  https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body style ="background-image: url('https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg?size=626&ext=jpg');">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" style="color:yellow;" href="MANAGER.php">VIEW</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="RESUSTAF.php" style="color:yellow;">Re-Stock</a>
          </li> -->
          <li class="nav-item dropdown">
            <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a> -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
        <form class="d-flex">
          <a href = "logout.php">
            <input type="button" value ="logout"class="btn btn-outline-success" style ="background-color : red;">

          </a>
        </form>
      </div>
    </div>
  </nav>

  <table id="table_id" class="table table-info" style="text-align:center;">
      <thead>
          <tr>
            <?php
            if(ISSET($_POST['Tglawal']))
            {
            ?>
            <th>Tanggal</th>
      <?php }?>
            <th>Nama</th>
            <th>Jumlah</th>
          </tr>
      </thead>
      <tbody style="text-align:center;">
      <?php
          include 'connect.php';
          if(ISSET($_POST['Tglawal']))
          {
          $s = mysqli_query($con,"select a.Tanggal as tanggal,c.Nama as nama, SUM(b.Jumlah) as jumlah  from transaksi a,detrans b , barong c where a.Tanggal='".$_POST['Tglawal']."' and a.IDTrans = b.IDTrans and c.ID = b.ID_Barang group by c.Nama");
          }
          else if(ISSET($_POST['bln']))
          {
            $s = mysqli_query($con,"select  b.Nama as nama,SUM(a.Jumlah) as jumlah from detrans a,barong b , transaksi c where a.ID_Barang=b.ID and  c.IDTrans = a.IDTrans and month(c.tanggal) = '".$_POST['bln']."' Group by b.Nama Order by SUM(a.Jumlah) desc ");
          }
          else
          {
              $s = mysqli_query($con,"select  b.Nama as nama,SUM(a.Jumlah) as jumlah from detrans a,barong b , transaksi c where a.ID_Barang=b.ID and  c.IDTrans = a.IDTrans and month(c.tanggal) = '".$_POST['bln1']."' Group by b.Nama Order by SUM(a.Jumlah) asc ");
          }
          while($row = mysqli_fetch_array($s))
          {
          ?>
              <tr>
                <?php
                if(ISSET($_POST['Tglawal']))
                {
                ?>
                <td><?php echo $row['tanggal']; ?></td>

          <?php }?>

                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>
                  <!-- <td><?php //echo $row['namas']; ?></td> -->
              </tr>
          <?php
          }
          ?>
      </tbody>
  </table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <script>$(document).ready( function () {
      $('#table_id').DataTable(
        {
          dom: 'Bfrtip',
        buttons:
        [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
      }
    );

  } );
  </script>
</body>
</html>
