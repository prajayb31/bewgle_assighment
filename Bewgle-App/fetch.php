<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >

<?php
require 'db.php';

$query="select * from product;";
$stmt=$con->prepare($query);
$stmt->execute();
$row=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>


    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Details</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
    
 <?php
foreach ($row as $r) {?>
    
   <tr class="table-primary">
      <th scope="row">Price</th>
      <td><?= $r['price'];  ?></td>
    </tr>
    
   <tr class="table-primary">
      <th scope="row">Latest Review</th>
      <td><?= $r['latestreview'];  ?></td>
    </tr>
    
   <tr class="table-primary">
      <th scope="row">Image</th>
      <td><img src="<?= $r['image'];  ?>" alt=""/></td>
    </tr>
    
   <tr class="table-primary">
      <th scope="row">Name</th>
      <td><?= $r['name'];  ?></td>
    </tr>
    
   <tr class="table-primary">
      <th scope="row">Title</th>
      <td><?= $r['title'];  ?></td>
    </tr>
    
   <tr class="table-primary">
      <th scope="row">Category</th>
      <td><?= $r['category'];  ?></td>
    </tr>
    
   <tr class="table-primary">
      <th scope="row">CreatedAt</th>
      <td><?= $r['createdat'];  ?></td>
    </tr>
    
   <tr class="table-primary">
      <th scope="row">Total Review</th>
      <td><?= $r['totalreview'];  ?></td>
    </tr>
       
       
    </table>
   


<p>Top Score</p><hr>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Score Name</th>
      <th scope="col">Value</th>
    </tr>
  </thead>


  
  
 <tr class="table-success">
      <th scope="row">Sound Quality</th>
      <td><?= $r['soundquality'];  ?></td>
    </tr>
    
 <tr class="table-success">
      <th scope="row">Bass</th>
      <td><?= $r['bass'];  ?></td>
    </tr>
    
 <tr class="table-success">
      <th scope="row">Design and Build</th>
      <td><?= $r['build'];  ?></td>
    </tr>
    
 <tr class="table-success">
      <th scope="row">Battery Backup</th>
      <td><?= $r['battery'];  ?></td>
    </tr>
  </table>
    
<?php

}
?>