<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIMAPRES</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/output.css" />
    <link rel="stylesheet" href="../css/input.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../js/init-alpine.js"></script>
  </head>
  <body
    class="bg-local bg-no-repeat bg-cover bg-center justify-center w-full"
    style="background-image: url(../img/bg\ firstscreean.png)"
  >
    <div class="flex flex-col items-center">
      <h1 class="mt-72 text-5xl font-bold text-white mb-4">SIMAPRES</h1>
      <div class="mb-96 flex flex-col items-center">
        <a href="signin.php" class="block mx-auto max-w-full sm:w-auto">
          <button
            type="button"
            class="text-white bg-yellow-500 hover:bg-yellow-200 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2"
          >
            MASUK SEBAGAI USER
          </button>
        </a>
        <a href="signin.php" class="block mx-auto max-w-full sm:w-auto m-2">
          <button
            type="button"
            class="text-white bg-yellow-500 hover:bg-yellow-200 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2"
          >
            MASUK SEBAGAI ADMIN
          </button>
        </a>
        <a
          href="../admin/admindashboard.php"
          class="block mx-auto max-w-full sm:w-auto"
        >
        </a>
        <a href="tatacara.php">
          <h1 class="text-white text-sm p-2 mt-2">
            Lihat tata cara pengajuan prestasi
          </h1>
        </a>
      </div>
    </div>
  </body>
</html>
