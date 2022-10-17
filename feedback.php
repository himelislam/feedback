<?php include 'inc/header.php'; ?>

<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
   
    <h2>Feedback</h2>

    <?php if(empty($feedback)) : ?>
      <p>There is NO Feedback</p>
    <?php endif; ?>
    
    <?php foreach($feedback as $item) : ?>
    <div class="card my-3 text-center">
     <div class="card-body">
       <div class="text-danger">
         <?php echo $item['name'] ?>
       </div>
       <br>
       <?php echo $item['body'] ?>
       <br>
       Date: <?php echo $item['date'] ?>
     </div>
   </div>
   <?php endforeach; ?>

   <!-- <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div> -->
<?php include 'inc/footer.php'; ?>

