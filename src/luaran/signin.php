<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
  <body>
    <div class="flex items-center min-h-screen p-6 bg-gray-50">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2 relative">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="../img/signin.png"
            />

            <div
              class="absolute inset-0 flex flex-col justify-center items-center text-center"
            >
              <h1 class="text-white text-2xl md:text-4xl font-bold mb-2">
                SELAMAT DATANG MAHASISWA BERPRESTASI
              </h1>
            </div>

            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full"
              src="../img/signin.png"
            />
          </div>

          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full justify-center items-center">
              <!-- logo vokasi -->
              <div class="flex justify-center items-center">
                <img src="../img/logo vokasi.png" />
              </div>
              <?php if(!empty($_GET['gagal'])){?>
        <?php if($_GET['gagal']=="emailKosong"){?>
            <span class="text-primary text-gradient font-weight-bold text-red-600">
            Maaf email tidak boleh kosong
            </span>
          <?php } else if($_GET['gagal']=="passKosong"){?>
            <span class="text-primary text-gradient font-weight-bold text-red-600">
            Maaf password tidak boleh kosong
            </span>
          <?php } else {?>
            <span class="text-primary text-gradient font-weight-bold text-red-600">
            Maaf email dan password anda salah
            </span>
          <?php }?>
      <?php }?>
      <form action="konfirmasisignin.php" method="post">
                <!-- /.col -->
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-950 focus:outline-none focus:shadow-outline-blue form-input"
                  placeholder=" Email " name="email"
                  type="text"
                />
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-blue-950 focus:outline-none focus:shadow-outline-blue form-input"
                  placeholder="Password" name="password"
                  type="password"
                />
                <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
              </label>


              <div
            
                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-950 border border-transparent rounded-lg active:bg-blue-950 hover:bg-blue-600 focus:outline-none focus:shadow-outline-purple"
                ><button type="submit" class="btn btn-primary btn-block" name="login" >Sign In</button>
              
              </div>
              <a href="tatacara.php">
                <h1 class="text-black text-sm p-2 mt-2 text-center">
                  Lihat tata cara pengajuan prestasi
                </h1>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>