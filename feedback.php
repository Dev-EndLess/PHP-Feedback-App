<?php include 'containers/header.php'; ?>

<?php
 $sql = 'SELECT * FROM feedback';
 $result = mysqli_query($conn, $sql);
 $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2 class="mt-52 sm:mt-24 text-2xl text-indigo-600 text-center font-bold">Total Feedback</h2>

<?php if (empty($feedback)): ?>
<p class="">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item): ?>
<div class="my-32 sm:mt-20 w-1/2 lg:w-1/4 mx-auto">
  <div class="text-center">
    <h2 class="text-xl font-bold mb-4 text-indigo-600 border rounded-md shadow">Feedback <?php echo $item[
         'id'
       ]; ?></h2>
    <?php echo $item['body']; ?>
    <div class="mt-2">
      <h3 class="text-end font-bold"><span class="font-light">By</span> <?php echo $item[
         'first_name'
       ]; ?></h3>
      <h3 class="text-end font-semibold mb-2"><span class="font-light">on</span> <?php echo date_format(
   date_create($item['date']),
   'l jS F Y'
 ); ?></h3>
      <hr>
    </div>
  </div>
</div>

<?php endforeach; ?>

<?php include 'containers/footer.php'; ?>