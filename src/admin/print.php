<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="../js/init-alpine.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      defer
    ></script>
    <script src="../js/charts-bars.js" defer></script>
  </head>
  <body>
    <form class="px-6 mx-auto">
      <!-- Bidang -->
      <div class="mb-6">
        <label for="bidang" class="block mb-2 text-sm font-medium text-gray-900"
          >Bidang</label
        >
        <select
          id="bidang"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>Penalaran dan Kreativitas</option>
          <option value="PK">Penalaran dan Kreativitas</option>
          <option value="SMB">Seni, Minat dan Bakat</option>
          <option value="KWU">Kewirausahaan</option>
        </select>
      </div>

      <!-- Jenis Prestasi -->
      <div class="mb-6">
        <label
          for="jenis_prestasi"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Jenis Prestasi</label
        >
        <select
          id="jenis_prestasi"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>Nasional</option>
          <option value="RE">Regional</option>
          <option value="NA">Nasional</option>
          <option value="INT">Internasional</option>
        </select>
      </div>

      <!-- Nama Perlombaan -->
      <div class="mb-6">
        <label
          for="nama_perlombaan"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Nama Perlombaan</label
        >
        <input
          type="text"
          id="nama_perlombaan"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="Lomba Debat Nasional"
          required
          readonly
        />
      </div>

      <!-- Kategori / Kelas Perlombaan -->
      <div class="mb-6">
        <label
          for="kategori_perlombaan"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Kategori / Kelas Perlombaan</label
        >
        <input
          type="text"
          id="kategori_perlombaan"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="Kelas Internasional"
          required
          readonly
        />
      </div>

      <!-- Judul Karya -->
      <div class="mb-6">
        <label
          for="judul_karya"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Judul Karya</label
        >
        <input
          type="text"
          id="judul_karya"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="Indonesia Maju"
          required
          readonly
        />
      </div>
      <!-- Tanggal Pelaksanaan -->
      <!-- Link Informasi Lomba -->
      <div class="mb-6">
        <label
          for="link_lomba"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Link Informasi Lomba</label
        >
        <input
          type="text"
          id="link_lomba"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="https//:debatnasional.com"
          required
          readonly
        />
      </div>
      <!-- Lokasi -->
      <div class="mb-6">
        <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900"
          >Lokasi</label
        >
        <input
          type="text"
          id="lokasi"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="Indonesia"
          required
          readonly
        />
      </div>
      <!-- Tahun Penyelenggaraan -->
      <div class="mb-6">
        <label
          for="tahun_penyelenggaraan"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Tahun Penyelenggaraan</label
        >
        <select
          id="tahun_penyelenggaraan"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>2023</option>
          <option value="RE">2023</option>
          <option value="NA">2022</option>
        </select>
      </div>
      <!-- Jumlah Anggota -->
      <div class="mb-6">
        <label
          for="jumlah_anggota"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Jumlah Anggota</label
        >
        <input
          type="number"
          id="jumlah_anggota"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="4"
          required
          readonly
        />
      </div>

      <!-- Nama Lembaga Ormawa -->
      <div class="mb-6">
        <label for="ormawa" class="block mb-2 text-sm font-medium text-gray-900"
          >Nama Lembaga Ormawa</label
        >
        <input
          type="text"
          id="ormawa"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="BEM Vokasi UB"
          required
          readonly
        />
      </div>

      <!-- Program -->
      <div class="mb-6">
        <label
          for="program"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Program</label
        >
        <select
          id="program"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>Dikti</option>
          <option value="DI">Dikti</option>
          <option value="ND">Non Dikti</option>
        </select>
      </div>
      <!-- Tingkat -->
      <div class="mb-6">
        <label
          for="tingkat"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Tingkat</label
        >
        <select
          id="tingkat"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>Nasional</option>
          <option value="INT">Internasional</option>
          <option value="NA">Nasional</option>
          <option value="WIL">Wilayah</option>
          <option value="PRO">Provinsi</option>
          <option value="LO">Lokal</option>
        </select>
      </div>

      <!-- Jenis Kepesertaan -->
      <div class="mb-6">
        <label
          for="jenis_kepesertaan"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Jenis Kepesertaan</label
        >
        <select
          id="jenis_kepesertaan"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>Kelompok</option>
          <option value="1">Individu</option>
          <option value="2">Kelompok</option>
        </select>
      </div>
      <!-- Capaian -->
      <div class="mb-6">
        <label
          for="capaian"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Capaian</label
        >
        <select
          id="capaian"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>Juara 1</option>
          <option value="1">Juara 1</option>
          <option value="2">Juara 2</option>
          <option value="3">Juara 3</option>
          <option value="4">Finalis</option>
        </select>
      </div>
      <!-- Jumlah Peserta -->
      <div class="mb-6">
        <label
          for="jumlah_peserta"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Jumlah Peserta</label
        >
        <input
          type="text"
          id="jumlah_peserta"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="4"
          required
          readonly
        />
      </div>
      <!-- Jumlah PT -->
      <div class="mb-6">
        <label
          for="jumlah_pt"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Jumlah PT</label
        >
        <select
          id="jumlah_pt"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>10 - 20</option>
          <option value="1">Kurang dari 10</option>
          <option value="2">10 - 20</option>
          <option value="3">Lebih dari 20</option>
        </select>
      </div>
      <!-- Jumlah Propinsi -->
      <div class="mb-6">
        <label
          for="jumlah_propinsi"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Jumlah Propinsi</label
        >
        <select
          id="jumlah_propinsi"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>Lebih dari 4</option>
          <option value="1">1 Propinsi</option>
          <option value="2">2-4 Propinsi</option>
          <option value="3">Lebih dari 4</option>
        </select>
      </div>
      <!-- Jumlah Negara -->
      <div class="mb-6">
        <label
          for="jumlah_negara"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Jumlah Negara</label
        >
        <select
          id="jumlah_negara"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
          disabled
        >
          <option selected>1 Negara</option>
          <option value="1">1 Negara</option>
          <option value="2">2-5 Negara</option>
          <option value="3">6-10 Negara</option>
          <option value="4">Lebih dari 10</option>
        </select>
      </div>
      <!-- Nama Dosen Pembimbing -->
      <div class="mb-6">
        <label
          for="nama_dosbim"
          class="block mb-2 text-sm font-medium text-gray-900"
          >Nama Dosen Pembimbing</label
        >
        <input
          type="text"
          id="nama_dosbim"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="Haechan "
          required
          readonly
        />
      </div>
      <!-- No WA Mahasiswa -->
      <div class="mb-6">
        <label for="no_wa" class="block mb-2 text-sm font-medium text-gray-900"
          >No WA Mahasiswa</label
        >
        <input
          type="text"
          id="no_wa"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
          placeholder="08999999990"
          required
          readonly
        />
      </div>
    </form>

    <script>
      window.onload = function () {
        window.print();
      };
    </script>
  </body>
</html>
