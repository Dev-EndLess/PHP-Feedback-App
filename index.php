<?php include 'containers/header.php'; ?>
<?php include 'validation.php'; ?>

<?php
// Set vars to empty values
$first_name = $last_name = $email = $body = '';
$first_name_error = $last_name_error = $email_error = $body_error = '';
?>

<div class="h-full flex flex-col">
  <div class="sm:flex-col justify-center items-center hidden sm:flex">
    <img src="img/endless.svg" class="w-24 tw-rounded-full flex justify-center items-center" alt="">
    <h2 class="text-2xl font-bold text-yellow-500">PHP Feedback App</h2>
    <?php echo isset($name) ? $name : ''; ?>
  </div>


  <div class="flex flex-col justify-center px-6 py-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
        alt="Your Company">
      <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-indigo-500">Leave a Feedback
      </h2>
    </div>

    <div class="h-full flex flex-col mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75">

        <!-- First name input  -->
        <div>
          <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First
            Name</label>
          <div class="mb-2">
            <input id="first_name" name="first_name" type="text" autocomplete="first_name" required
              class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          <p class="text-red-500"><?php echo $first_name_error ?></p>
        </div>

        <!-- Last name input  -->
        <div>
          <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last
            Name</label>
          <div class="mb-2">
            <input id="last_name" name="last_name" type="text" autocomplete="last_name" required
              class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          <p class="text-red-500"><?php echo $last_name_error ?></p>
        </div>

        <!-- Email input -->
        <div class="flex items-center justify-between">
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
        </div>
        <div class="mb-2">
          <input id="email" name="email" type="email" autocomplete="email" required
            class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        <p class="text-red-500"><?php echo $email_error ?></p>

        <!-- Feedback input -->
        <div>
          <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Feedback</label>
          <div class="mb-2">
            <textarea id="body" name="body" type="text" autocomplete="body" required
              class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          <p class="text-red-500"><?php echo $body_error ?></p>
        </div>

        <!-- Submit -->
        <div>
          <input type="submit" name="submit" value="Send"
            class="cursor-pointer px-2 flex mt-4 w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        </div>

      </form>
    </div>

  </div>
</div>

<?php include 'containers/footer.php'; ?>

