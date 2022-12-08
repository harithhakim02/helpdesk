<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
	.status{width: 20px; height: 20px; float: left;}
</style>
<br>
 <ul>
	<li><div class="rounded-circle bg-danger status"></div>&nbsp;Belum Diproses</li>
	<li><div class="rounded-circle bg-warning status"></div>&nbsp;Sedang Diajukan</li>
	<li><div class="rounded-circle bg-success status"></div>&nbsp;Sudah Selesai</li>
</ul>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Masalah</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php if($history_status) { ?> 
    <?php $no = 1; foreach($history_status as $status) { ?>
      <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $order->masalah ?></td>
        <td><?php echo date('d/m/y', strtotime($order->tanggal)) ?></td>
        <td>
            <?php 
                switch ($order->status) {
                  case 1:
                        echo '<div class="p-2 d-inline-block rounded-circle bg-danger"></div>';
                      break;
                  
                  case 2:
                        echo '<div class="p-2 d-inline-block rounded-circle bg-warning"></div>';
                      break;

                   case 3:
                        echo '<div class="p-2 d-inline-block rounded-circle bg-success"></div>';
                      break;
                }
             ?>    
        </td>
      </tr>
    <?php $no++; } ?>
    <?php }  ?>
  </tbody>
</table>