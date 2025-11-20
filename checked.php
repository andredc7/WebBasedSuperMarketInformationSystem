<table id="table_id1" class="table table-info" style="text-align:center;">
  <thead>
      <tr>
          <th>ID</th>
          <th>Status</th>
          <th>Aksi</th>
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
              <td><?php echo $row['Status']; ?></td>
              <td><button type="button" class="barang" data-isi="<?php echo $row['ID']; ?>" value="<?php echo $row['ID']; ?>"
              data-dismiss="modal">Pilih</button></td>
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
$(".barang").click(function(){
  var idx = $(this).attr('data-isi');
  console.log(idx);
  var data = {
    'idx': idx
  };
  $.ajax({
    type: 'POST',
    url: "checkedst.php",
    data : data,
    cache: false,
    success: function(dataResult) {
      console.log(dataResult);
    $('#tayang').load('checked.php');
    }
  });
});
});
</script>
