<!DOCTYPE html>
<html lang="en">
<?php include_once('head.html');?>
<body>
<div class="container">
    <h1 class='h1'>Lista masini </h1>
<?php // include_once ( 'array.php');?>
<?php include_once('connect.php');?>
<?php
$sql = "SELECT * FROM masini  WHERE an >='2013'";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) :?>


<table class="table table-striped table-dark">
  <thead class="thead-dark">
    <tr class="bg-danger">
      <th scope="col">Nume</th>
      <th scope="col">Model</th>
      <th scope="col">Pret</th>
      <th scope="col">An</th>
      <th scope="col">Culoare</th>
      <th scope="col">Poza</th>
      <th scope="col">Data adaugare</th>
    </tr>
  </thead>
  <tbody>
  
  <?php while($masina = mysqli_fetch_assoc($result)):?>
        <?php if ($masina['an'] >=2000):?>
    <tr class="bg-danger text-warning">
      <th scope="row"> <?php echo ucfirst($masina['nume']);?></th>
      <td><?php echo ucfirst($masina['model']);?></td>
      <td><?php echo $masina['pret'];?></td>
      <td><?php echo $masina['an'];?></td>
      <td><?php echo $masina['culoare'];?></td>
      <td> <img  style="max-width:60px;" src="img/<?php echo $masina['poza'];?>" alt=" poza">  </td>
      <td><?php echo $masina['dataadaugare'];?></td>
    </tr>
    <?php endif;?>
    <?php endwhile;?>
    
  </tbody>
</table>
<?php endif;?>
</div>
</body>
</html>