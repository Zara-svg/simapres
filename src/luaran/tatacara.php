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
    <div
      class="flex flex-col items-center mt-24 sm:mt-52 pt-5 sm:p-5 justify-center"
    >
      <h1 class="text-2xl sm:text-3xl font-bold text-white mb-4">
        TATA CARA PENGAJUAN PRESTASI
      </h1>
      <div class="mt-5 text-white max-w-full sm:max-w-xl">
        <ul
          class="mx-2 sm:mx-10 md:mx-20 lg:mx-32 px-2 sm:px-5 pt-2 sm:pt-5 text-justify"
        >
          <li class="mb-2 sm:mb-4">
            1. Persiapkan bukti-bukti atau dokumen pendukung yang mendukung
            pengajuan prestasi, seperti sertifikat, surat rekomendasi, foto,
            atau video.
          </li>
          <li class="mb-2 sm:mb-4">
            2. Hubungi pihak yang bertanggung jawab atas program prestasi di
            institusi atau organisasi Anda. Ini bisa menjadi guru, dosen,
            pelatih, atau koordinator kegiatan.
          </li>
          <li class="mb-2 sm:mb-4">
            3. Dalam beberapa kasus, Anda mungkin perlu mengisi formulir
            pengajuan prestasi. Formulir ini biasanya mencakup informasi pribadi
            Anda, jenis prestasi yang diajukan, dan bukti-bukti pendukung.
          </li>
          <li class="mb-2 sm:mb-4">
            4. Jika diperlukan, ajukan surat permohonan resmi yang berisi alasan
            mengapa Anda layak menerima prestasi tersebut. Jelaskan pencapaian
            Anda, kontribusi Anda dalam kegiatan terkait, dan dampak positif
            dari pemberian prestasi tersebut.
          </li>
          <li class="mb-2 sm:mb-4">
            5. Jika ada proses seleksi atau wawancara, ikuti prosedur tersebut
            dengan baik. Persiapkan diri Anda dengan baik untuk menjawab
            pertanyaan dan menunjukkan kompetensi serta dedikasi Anda.
          </li>
        </ul>
        <div>
          <div class="flex justify-center mt-5">
            <a href="firstscreen.php">
              <button
                type="button"
                class="text-white bg-yellow-500 hover:bg-yellow-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center"
              >
                Kembali
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
