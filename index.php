<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/styles/output.css" rel="stylesheet">
  <script src="src/js/handlers.js"></script>
</head>

<body class="h-screen w-screen">
  <header class="h-[10%] bg-zinc-400 flex flex-row items-center justify-end">
    <div class="">
      <div class="p-3 mx-4 w-auto rounded-xl shadow-2xl shadow-zinc-900 cursor-pointer h-2/4 hover:skew-y-3 hover:scale-110 duration-500 bg-yellow-300 text-2xl font-sans inline-block text-violet-700" onclick="handleClick()">Last load: <?php echo date("H:i:s"); ?></div>
    </div>

  </header>
  <main class="bg-gradient-to-br from-zinc-300 to-zinc-900 h-[80%]">

    <div id="login_form" class="flex flex-wrap items-center justify-center p-6">
      <form action="src/php/login.php" method="POST">
        <div class="flex flex-col w-24">
          <label for="username">User name:</label>
          <input name="username" type="text">
          <label for="password">Password: </label>
          <input name="password" type="password">
          <button type="submit" class="border-2 font-sans my-3 py-2 rounded-md border-none shadow-zinc-600 hover:scale-105 hover:shadow-lime-500 shadow-xl hover:border-lime-400 bg-amber-700 text-zinc-300 hover:text-lime-400 text-2xl tracking-widest ">Login</button>
        </div>
      </form>
    </div>

  </main>

  <footer class="flex h-[10%] flex-wrap items-center justify-center bg-zinc-500">
    <div class="text-xl font-bold text-gray-700">© 2022 Copyright:</div>
    <a class="ml-5 text-gray-900" href="https://github.com/pkubickii" target="_blank" rel="noreferrer">
      pkubickii@github
    </a>
    <?php
    require "hotreloader/HotReloader.php";
    new HotReloader\HotReloader('//localhost/myphp/phrwatcher.php');
    ?>
  </footer>
</body>

</html>
