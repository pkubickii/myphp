<?php
session_start();
$username = $_SESSION["username"];
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
?>
<!doctype html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="src/styles/output.css" rel="stylesheet">
  <script src="src/js/handlers.js"></script>
</head>

<body class="min-h-screen flex flex-col">
  <nav class="flex flex-wrap items-center justify-between bg-gradient-to-tl from-zinc-200 to-zinc-900 p-3 sm:p-6">
    <div class="p-3 mx-4 w-auto rounded-xl shadow-2xl shadow-zinc-900 cursor-pointer h-2/4 hover:skew-y-3 hover:scale-110 duration-500 bg-yellow-300 text-2xl font-sans inline-block text-violet-700" onclick="handleClick()">
      Last load: <?= date("H:i:s"); ?>
    </div>
    <div className="flex flex-grow flex-row items-center justify-center md:flex-none">
      <?php if (!isset($username)) { ?>
        <button class="h-10 w-28 rounded-md border-2 border-black bg-inherit from-sky-100 to-sky-500 px-2 py-1 text-xl shadow-lg hover:bg-gradient-to-br md:h-16 md:w-auto md:px-6 md:py-2" onclick="handleClick()">Register</button>
      <?php } else { ?>
        <button class="h-10 w-28 rounded-md border-2 border-black bg-inherit from-sky-100 to-sky-500 px-2 py-1 text-xl shadow-lg hover:bg-gradient-to-br md:h-16 md:w-auto md:px-6 md:py-2" onclick="handleLogout()">
          <?= $username ?>
        </button>
      <?php } ?>
    </div>
  </nav>
  <main class="flex-1 bg-gradient-to-br from-zinc-100 to-zinc-800">

    <?php if (!isset($username)) { ?>
      <div class="relative overflow-hidden mb-8">
        <div class="rounded-t-lg overflow-hidden border-t border-l border-r border-gray-400 flex justify-center p-8">
          <form action="src/php/login.php" method="POST" class="w-full max-w-sm flex flex-col gap-3 border-2 p-10 border-gray-500">
            <div class="flex flex-row">
              <div class="w-1/3">
                <label for="username" class="block text-gray-500 font-bold text-right mb-1 md:mb-0 pr-4">User name:</label>
              </div>
              <div class="w-2/3">
                <input name="username" id="username" type="text" class="bg-gray-400 appearance-none border-2 border-gray-500 rounded-md w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-amber-700">
              </div>
            </div>
            <div class="flex flex-row">
              <div class="w-1/3">
                <label for="password" class="block text-gray-500 font-bold text-right mb-1 md:mb-0 pr-4">Password: </label>
              </div>
              <div class="w-2/3">
                <input name="password" id="password" type="password" placeholder="******************" class="bg-gray-400 appearance-none border-2 border-gray-500 rounded-md w-full py-2 px-4 text-gray-800 leading-tight focus:outline-none focus:bg-white focus:border-amber-700">
              </div>
            </div>
            <div class="flex flex-row">
              <div class="md:w-1/3"></div>
              <div class="md:w-2/3">
                <button type="submit" class="border-2 font-sans my-3 px-6 py-2 rounded-md border-none shadow-slate-600 hover:scale-105 hover:shadow-lime-500 shadow-xl hover:border-lime-400 bg-amber-700 text-zinc-300 hover:text-lime-400 text-2xl tracking-widest">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    <?php } else { ?>
      <div class="p-6 text-xl text-justify">
        <article>
          <h1 class="p-5 text-3xl text-violet-600 font-sans font-bold">Przewodnik po kolorach w notacji heksadecymalnej.</h1>
          <br>
          <p class="ml-10 w-3/4">
            Kolory szesnastkowe to wizualny język sieci. Jeśli chcesz, aby strona internetowa (lub aplikacja internetowa) wyświetlała określony kolor, podaj jej kod szesnastkowy.
          </p>
          <br>
          <h2 class="p-5 text-2xl text-violet-600 font-sans font-semibold">Co to jest szesnastkowy kod koloru?</h3>
            <div class="container min-w-full items-center justify-center flex flex-row">
              <br>
              <img src="static/hexcolors1.jpg" alt="Przykładowe kolory i ich wartości heksadecymalne" class="flex w-1/2 h-auto py-5">
            </div>
            <br>
            <p class="ml-10 w-3/4">
              Szesnastkowy kod koloru to 6-symbolowy kod złożony z maksymalnie trzech elementów 2-symbolowych. Każdy z elementów składających się z 2 symboli wyraża wartość koloru od 0 do 255.
            </p>
            <br>

            <ul class="list-disc ml-24">
              <li>Pierwszy kolor: czerwony (red)</li>
              <li>Drugi kolor: zielony (green)</li>
              <li>Trzeci kolor: niebieski (blue)</li>
            </ul>
            <br>
            <h2 class="p-5 text-2xl text-violet-600 font-sans font-semibold">Co to są szesnastkowe kody kolorów?</h3>
              <br>
              <p class="ml-10 w-3/4">
                Szesnastkowe kody kolorów to wartości, które informują wyświetlacz, ile koloru ma pokazać. Wartości to specjalny kod reprezentujący wartości kolorów od 0 do 255.
              </p>
              <br>
              <p class="ml-10 w-3/4">
                Jeśli czerwony, zielony i niebieski mają wartość minimalną 0 (reprezentowaną w kodzie jako „00”), wyrażonym kolorem jest kolor czarny. Jeśli czerwony, zielony i niebieski mają maksymalnie 255 (reprezentowane w kodzie jako „ff”), wyrażonym kolorem jest kolor biały.
              </p>
              <br>
              <div class="flex flex-row items-center justify-between">
                <div class="flex flex-col w-2/3">
                  <h2 class="p-5 text-2xl text-violet-600 font-sans font-semibold">Co to są szesnastkowe kody kolorów?</h2>
                  <br>
                  <p class="ml-10 w-3/4">
                    Szesnastkowe wartości kolorów można łączyć, aby pokazać ponad 16 milionów różnych kolorów. Tak więc, oczywiście, większość będzie gdzieś pomiędzy. Zawsze możesz użyć <a href="#" class="underline text-violet-500 hover:text-blue-700 visited:text-red-500">konwertera, aby przekonwertować wartości liczbowe RGB na kod szesnastkowy.</a>
                  </p>
                  <br>
                  <p class="ml-10 w-3/4">
                    Jeśli czerwony, zielony i niebieski mają wartość minimalną 0 (reprezentowaną w kodzie jako „00”), wyrażonym kolorem jest kolor czarny. Jeśli czerwony, zielony i niebieski mają maksymalnie 255 (reprezentowane w kodzie jako „ff”), wyrażonym kolorem jest kolor biały.
                  </p>
                </div>
                <div class="flex p-10 w-1/3">
                  <aside class="flex flex-row-reverse">
                    <ul class="list-disc">
                      <li><a href="https://mothereffinghsl.com/" class="underline text-violet-500 hover:text-blue-700 visited:text-violet-500">Strona pokazująca możliwości hsl</a></li>
                      <li><a href="#" class="underline text-violet-500 hover:text-blue-700 visited:text-violet-500">Portal kolorów świata</a></li>
                      <li><a href="#" class="underline text-violet-500 hover:text-blue-700 visited:text-violet-500">Więcej informacji o css</a></li>
                      <li><a href="#" class="underline text-violet-500 hover:text-blue-700 visited:text-violet-500">Informacje dotyczące UX</a></li>
                      <li><a href="#" class="underline text-violet-500 hover:text-blue-700 visited:text-violet-500">Oh well…</a></li>
                    </ul>
                  </aside>
                </div>
              </div>
        </article>
      </div>

    <?php } ?>
  </main>

  <footer class="p-5 flex flex-wrap items-center justify-center bg-zinc-600">
    <div class="text-xl font-bold text-gray-700">© 2022 Copyright:</div>
    <a class="ml-5 text-gray-900" href="https://github.com/pkubickii" target="_blank" rel="noreferrer">
      pkubicki
    </a>
    <?php
    require "hotreloader/HotReloader.php";
    new HotReloader\HotReloader('//localhost/myphp/phrwatcher.php');
    ?>
  </footer>
</body>

</html>
