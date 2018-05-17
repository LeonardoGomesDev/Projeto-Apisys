<!DOCTYPE html>
<html>
<head>
	<title>Apisys</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<style >
 	body{
 		background-image: url(fundo2.jpg);
 	}
	.tabela{
		width: 100%;
		border: 2px solid blue;
		margin: 20px;
		color: red;
		font-size:large;
		font-family: verdana;
		box-shadow: 2px 2px 20px blue;
		
	}
	.table th{
		text-align: left;
	}
	.table th td{
		border: 1px solid #222;
		padding: 5px;
		}
	.table-bordered{
		background-color: transparent;
	}
	.menu{
		background-color: #000;
	}
</style>
<?php
	$json_str = file_get_contents("https://swapi.co/api/people/?format=json");   
	$json_Data = json_decode($json_str, true);
 ?>
<body>
<div class="menu">
	<img src="menu.jpg" style="margin-left: 200px;" width="100px;" height="100px; ">
</div>	
<br>
  <?php
    for($leo = 0; $leo<10; $leo++){
  ?>
<div class="container">
	<table class="tabela table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Nome</th>
				<th scope="col">Peso</th>
				<th scope="col">Cor dos Cabelos</th>
				<th scope="col">Cor dos Olhos</th>
				<th scope="col">Sexo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				
				<td><?php echo $json_Data['results'][$leo]['name']?></td>
				<td><?php echo $json_Data['results'][$leo]['mass']?></td>
				<td><?php echo $json_Data['results'][$leo]['hair_color']?></td>
				<td><?php echo $json_Data['results'][$leo]['eye_color']?></td>
				<td><?php echo $json_Data['results'][$leo]['gender']?></td>
			</tr>
		</tbody>	
	</table>
</div>
  <?php
    } 
  ?>
</body>
</html>