<?php include('connection.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Starter</title>
 <!-- font-awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
 <!-- styles -->
 <link rel="stylesheet" href="style.css" />
</head>

<body>
 <section class="menu">
  <!-- title -->
  <div class="title">
   <h2>Menu De La Semaine</h2>
   <div class="underline"></div>
  </div>
  <!-- filter button -->
  <div class="btn-container">
   <button type="button" class="filter-btn" data-id="all">all</button>
   <button type="button" class="filter-btn" data-id="breakfast">Lundi</button>
   <button type="button" class="filter-btn" data-id="lunch">Mardi</button>
   <button type="button" class="filter-btn" data-id="shakes">Mercredi</button>
   <button type="button" class="filter-btn" data-id="shakes">Jeudi</button>
   <button type="button" class="filter-btn" data-id="shakes">Vendredi</button>
   <button type="button" class="filter-btn" data-id="shakes">Samedi</button>
   <button type="button" class="filter-btn" data-id="shakes">Dimanche</button>
  </div>
  <div class= "section2">
    <?php
    $stmt = $pdo->query("SELECT * FROM items ORDER BY RAND() LIMIT 7");
    $resultArray = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $album = <<<DELIMETER
        <div class="section-center">
         <!-- single items -->
         <article class="menu-item">
         <img src="{$row["images_path"]}" class="photo" alt="menu item">
          <div class="item-info">
           <header>
            <h4>{$row["name"]}</h4>
            <h4 class="price">$15</h4>
           </header>
           <p class="item-text">
              {$row["description"]}
           </p>
           <p class="item-text">
              {$row["price"]}DH
           </p>
          <button type="button" class="filter-btn" data-id="all">Order</button>
          </div>
         </article>
        </div>
    
       DELIMETER;
       echo $album;
       array_push($resultArray, $row['id']);
    }
    $jsonArray = json_encode($resultArray);
    ?>
    <script>
     console.log(<?php echo $jsonArray; ?>);
     currentOrder =<?php echo $jsonArray; ?>;
     console.log(currentOrder[0]);
     const sectionCenter = document.querySelector('.section-center');
     const containerBtn = document.querySelector('.btn-container'); 
     console.log(sectionCenter);
     console.log(containerBtn);
     // window.addEventListener('DOMContentLoaded', function(){
     //  // function displayMenuBtn(){

     //  // }
     // }


    </script>
    </div>
 </section>

 <?php 
  if(isset($POST['submit'])){
   
  }
 
 ?>
 
</body>

</html>