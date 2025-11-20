<?php
session_start();
if(!isset($_SESSION['uname']))
{
  echo "Anda Belum Masuk!Silahkan <a href='ng.php'>Login</a> Dahulu";
}
else
{
?>
<!doctype html>

<html lang="en">
  <head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    .ignielPelangi {
    background: linear-gradient(45deg, #f22613, #f89406, #26a65b, #5868ec, #f54e80, #f7ca18, #d2527f);
    background-size: 500% 500%;
    -webkit-animation: ignielGradient 12s ease infinite;
    -moz-animation: ignielGradient 12s ease infinite;
    animation: ignielGradient 12s ease infinite;
}
@-webkit-keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes ignielGradient {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
    </style>
  </head>
  <body class="ignielPelangi">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link "  href="Admin1.php" style="color:yellow;">Casheer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Admin2.php" style="color:yellow;">Re-Supply</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" style="color:yellow;" href="#">View</a>
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

  <div class="container-fluid">
    <div class="row align-items-start">
      <div class="col-3">

      </div>
      <div class="col-5">

        <button type="button" class="btn btn-primary" style ="margin-top:25px; margin-left:25px; width : 1000px; color: white; font-size: 25px; background-color : gray; " data-bs-toggle="modal" data-bs-target="#exampleModal1">View Staf</button>
        <button type="button" class="btn btn-primary" style ="margin-top:25px; margin-left:25px; width : 1000px; color: white; font-size: 25px; background-color : gray; " data-bs-toggle="modal" data-bs-target="#exampleModal">View Pemasukan</button><br><br>
        <button type="button" class="btn btn-primary" style ="margin-top:25px; margin-left:25px; width : 1000px; color: white; font-size: 25px; background-color : gray; " data-bs-toggle="modal" data-bs-target="#exampleModal3">View Pengeluaran</button>
        <button type="button" class="btn btn-primary" style ="margin-top:25px; margin-left:25px; width : 1000px; color: white; font-size: 25px; background-color : gray; " data-bs-toggle="modal" data-bs-target="#exampleModal2">View Stock</button><br><br>
        <button type="button" class="btn btn-primary" style ="margin-top:25px; margin-left:25px; width : 1000px; color: white; font-size: 25px; background-color : gray; " data-bs-toggle="modal" data-bs-target="#exampleModal4">View detail re stock</button>
        <!-- <button type="button" class="btn btn-primary" style ="margin-top:25px; margin-left:25px;"data-bs-toggle="modal" data-bs-target="#exampleModal2">Re Stock</button> -->
      </div>
      <div class="col-2">

</div>
<div class="col-2">
  <div class="card" style="width: 18rem;">
<img class="card-img-top" src="https://i.pinimg.com/originals/ba/a5/3a/baa53af513f9c1aba652d353b66d9997.jpg" alt="Card image cap">
<div class="card-body">
<p class="card-text"> HI <?php echo $_SESSION['uname']; ?></p>
</div>
</div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
    <!-- Button trigger modal -->




    <script>$(document).ready( function () {
        $('#table_id').DataTable();
        $('#table_id1').DataTable();
        $('#table_id2').DataTable();
        $('#table_id4').DataTable();
        // $('#table_id').DataTable({
        //     "lengthMenu": [[3, 5, 10, 25, 50, -1], [3, 5, 10, 25, 50, "All"]]
        // });
    } );
    </script>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table id="table_id" class="table table-info" style="text-align:center;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                <?php
                    include 'connect.php';
                    $s = mysqli_query($con,"select * from transaksi where IDTrans  like '%IN%' order by IDTrans");
                    while($row = mysqli_fetch_array($s))
                    {
                    ?>
                        <tr>
                            <td><?php echo $row['IDTrans']; ?></td>
                            <td><?php echo $row['Total']; ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
          </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table id="table_id4" class="table table-info" style="text-align:center;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                <?php
                    include 'connect.php';
                    $s = mysqli_query($con,"select * from transaksi where IDTrans  like '%OUT%'");
                    while($row = mysqli_fetch_array($s))
                    {
                    ?>
                        <tr>
                            <td><?php echo $row['IDTrans']; ?></td>
                            <td><?php echo $row['Total']; ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
          </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table id="table_id4" class="table table-info" style="text-align:center;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>ID_Supplyer</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                <?php
                    include 'connect.php';
                    $s = mysqli_query($con,"select * from detail_restock");
                    while($row = mysqli_fetch_array($s))
                    {
                    ?>
                        <tr>
                            <td><?php echo $row['ID_Detail']; ?></td>
                            <td><?php echo $row['Jumlah']; ?></td>
                            <td><?php echo $row['Status']; ?></td>
                            <td><?php echo $row['ID_Supplyer']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
          </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table id="table_id" class="table table-info" style="text-align:center;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                <?php
                    include 'connect.php';
                    $s = mysqli_query($con,"select * from staf where ID not like '%MG%'");
                    while($row = mysqli_fetch_array($s))
                    {
                    ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['Nama']; ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add Staf</button>
          </div>
          </div>
      </div>
    </div>

    <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class ="form-group">
              <label>Nama atau ID Barang</label>
              <input type ="text" class ="form-control">
            </div>
            <div class ="form-group">
              <label>Jumlah</label>
              <input type ="number" class ="form-control">
            </div>
            <div class ="form-group">
              <label>Nama atau ID Supllier</label>
              <input type ="text" class ="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
          </div>
      </div>
    </div> -->

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table id="table_id2" class="table table-info" style="text-align:center;">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nama</th>

              </tr>
          </thead>
          <tbody>
            <?php
                include 'connect.php';
                $s = mysqli_query($con,"select * from barong");
                while($row = mysqli_fetch_array($s))
                {
                ?>
                    <tr>
                        <td><?php echo $row['Nama']; ?></td>
                        <td><?php echo $row['Jumlah']; ?></td>

                    </tr>
                <?php
                }
                ?>
          </tbody>
      </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Add Staf</button>
          </div>
          </div>
      </div>
    </div>
  </body>
</html>
<?php
} ?>
