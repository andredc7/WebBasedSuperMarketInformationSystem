
<table id="table_id1" class="table table-info" style="text-align:center;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Topeng aksi </th>

        </tr>
    </thead>
    <tbody style="text-align:center;">
    <?php
    session_start();
        include 'connect.php';
        $s = mysqli_query($con,"select * from ndetrans where IDu = '".$_SESSION['uname']."'");
        while($row = mysqli_fetch_array($s))
        {
        ?>
            <tr>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['Jumlah']; ?></td>
                <td><?php echo $row['Subtotal']; ?></td>
                <td><button type="button" class="helete" data-isi="<?php echo $row['ID_Detail']; ?>" value="<?php echo $row['ID_Detail']; ?>"
                >Delete</button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<script>
$(document).ready(function() {

// $('#table_id1').DataTable({
//     "lengthMenu": [[3, 5, 10, 25, 50, -1], [3, 5, 10, 25, 50, "All"]]
// });
$(".helete").click(function(){
  var idx = $(this).attr('data-isi');
  console.log(idx);
  var data = {
    'idx': idx
  };
  $.ajax({
    type: 'POST',
    url: "helete.php",
    data : data,
    cache: false,
    success: function(dataResult) {
      console.log(dataResult);
    $('#tayang').load('mulek3.php');
    }
  });
});
});
</script>
