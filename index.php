<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <tr>
      <th scope="col">IP 1</th>
      <th scope="col">IP 2</th>
      <th scope="col">IP 3</th>
    </tr>
    <?php 
    $no = 1;
    $query = mysqli_query($db, 'SELECT * FROM nama_table');
	foreach($query as $row){ 
	?>
	<tr>
		<td scope="row"><?php $no ?></td>
		<td> <?php $row['ipk1'] ?></td>
		<td> <?php $row['ipk2'] ?></td>
		<td> <?php $row['ipk3'] ?></td>
	</tr>
    <?php 
    $no++ }
    ?>
</table>
</body>
</html>