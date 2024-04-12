<?php include 'containers/header.php'; ?>

<div class="flex flex-col justify-center items-center mt-56 sm:mt-24">
  <img src="img/endless.svg" class="w-24 tw-rounded-full flex justify-center items-center" alt="">
  <h2 class="text-2xl font-bold mb-2 text-yellow-400">PHP Feedback</h2>
  <?php echo isset($name) ? $name : ''; ?>
  <p class="text-center font-semibold">Leave feedback for PHP programming language</p>
</div>

<form method="POST" action="<?php echo htmlspecialchars(
      $_SERVER['PHP_SELF']
    ); ?>" class="mt-4 w-75">
  <div class="flex flex-col justify-center px-6 py-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
        alt="Your Company">
      <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account
      </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="#" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="mt-4 flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required
              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          <div class="mt-2 text-end text-sm">
            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot Password?</a>
          </div>
        </div>

        <div>
          <button type="submit"
            class="flex mt-10 w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
            In</button>
        </div>
      </form>

    </div>
  </div>
</form>

<?php include 'containers/footer.php'; ?>