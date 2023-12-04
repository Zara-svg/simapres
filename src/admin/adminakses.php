<?php 
include('../luaran/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_user = $_GET['data'];
		//hapus kategori blog
		$sql_dh = "delete from aktor
		where id_user = '$id_user'";
		mysqli_query($koneksi,$sql_dh);
	}
}
?>
 <?php if(!empty($_GET['notif'])){?>
     <?php if($_GET['notif']=="tambahberhasil"){?>
           <div class="alert alert-success" role="alert">
           Data Berhasil Ditambahkan</div>
     <?php } else if($_GET['notif']=="editberhasil"){?>
           <div class="alert alert-success" role="alert">
           Data Berhasil Diubah</div>
     <?php } else if($_GET['notif']=="hapusberhasil"){?>
           <div class="alert alert-danger" role="alert">
           Data Berhasil Dihapus</div>
     <?php }?>
      <?php }?>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Mahasiswa Berprestasi</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"
    />
    <script
      type="text/javascript"
      charset="utf8"
      src="https://code.jquery.com/jquery-3.6.0.min.js"
    ></script>
    <script
      type="text/javascript"
      charset="utf8"
      src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"
    ></script>

    <!-- CSS -->
    <style>
      /* Overrides for Tailwind CSS */
      .dataTables_wrapper select,
      .dataTables_wrapper .dataTables_filter input {
        /* ... (unchanged styles) ... */
      }

      table.dataTable.hover tbody tr:hover,
      table.dataTable.display tbody tr:hover {
        /* ... (unchanged styles) ... */
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button {
        /* ... (unchanged styles) ... */
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        /* ... (unchanged styles) ... */
      }

      .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        /* ... (unchanged styles) ... */
      }

      table.dataTable.no-footer {
        /* ... (unchanged styles) ... */
      }

      table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before,
      table.dataTable.dtr-inline.collapsed
        > tbody
        > tr
        > th:first-child:before {
        /* ... (unchanged styles) ... */
      }

      /* New styles for action buttons */
      .table-actions button {
        margin-right: 0.5rem;
      }
    </style>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-gray-200 md:block flex-shrink-0"
      >
        <div class="py-5 bg-blue-950">
          <a class="ml-6 text-lg font-bold text-white bg-blue-950" href="#">
            SIMAPRES
          </a>
        </div>
        <div class="py-4 text-black">
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-black hover:text-blue-900 transition-colors duration-150"
                href="admindashboard.php"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.7715 4.94527C12.6988 4.87573 12.6021 4.83691 12.5015 4.83691C12.4009 4.83691 12.3041 4.87573 12.2314 4.94527L3.24219 13.5327C3.20401 13.5692 3.17364 13.6131 3.15291 13.6617C3.13218 13.7103 3.12152 13.7626 3.12158 13.8154L3.12012 21.875C3.12012 22.2894 3.28474 22.6868 3.57776 22.9798C3.87079 23.2728 4.26822 23.4375 4.68262 23.4375H9.375C9.5822 23.4375 9.78091 23.3551 9.92743 23.2086C10.0739 23.0621 10.1563 22.8634 10.1563 22.6562V16.0156C10.1563 15.912 10.1974 15.8126 10.2707 15.7394C10.3439 15.6661 10.4433 15.625 10.5469 15.625H14.4531C14.5567 15.625 14.6561 15.6661 14.7293 15.7394C14.8026 15.8126 14.8438 15.912 14.8438 16.0156V22.6562C14.8438 22.8634 14.9261 23.0621 15.0726 23.2086C15.2191 23.3551 15.4178 23.4375 15.625 23.4375H20.3154C20.7298 23.4375 21.1273 23.2728 21.4203 22.9798C21.7133 22.6868 21.8779 22.2894 21.8779 21.875V13.8154C21.878 13.7626 21.8673 13.7103 21.8466 13.6617C21.8259 13.6131 21.7955 13.5692 21.7573 13.5327L12.7715 4.94527Z"
                    fill="currentColor"
                  />
                  <path
                    d="M23.9702 11.9214L20.3179 8.42725V3.125C20.3179 2.9178 20.2356 2.71909 20.0891 2.57257C19.9426 2.42606 19.7438 2.34375 19.5366 2.34375H17.1929C16.9857 2.34375 16.787 2.42606 16.6405 2.57257C16.4939 2.71909 16.4116 2.9178 16.4116 3.125V4.6875L13.5835 1.9834C13.3189 1.71582 12.9253 1.5625 12.5 1.5625C12.0762 1.5625 11.6836 1.71582 11.419 1.98389L1.03322 11.9204C0.729511 12.2134 0.691425 12.6953 0.967792 13.0127C1.03719 13.0928 1.12217 13.158 1.21755 13.2042C1.31293 13.2504 1.41672 13.2768 1.5226 13.2816C1.62848 13.2864 1.73424 13.2697 1.83344 13.2324C1.93264 13.195 2.02321 13.1379 2.09963 13.0645L12.2315 3.38281C12.3042 3.31327 12.4009 3.27446 12.5015 3.27446C12.6021 3.27446 12.6988 3.31327 12.7715 3.38281L22.9043 13.0645C23.0536 13.2076 23.2535 13.2857 23.4603 13.2817C23.667 13.2777 23.8638 13.1918 24.0073 13.043C24.3071 12.7324 24.2822 12.2197 23.9702 11.9214Z"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="adminprofil.php"
              >
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 25 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.33333 7.29167C8.33333 6.1866 8.77232 5.12679 9.55372 4.34539C10.3351 3.56399 11.3949 3.125 12.5 3.125C13.6051 3.125 14.6649 3.56399 15.4463 4.34539C16.2277 5.12679 16.6667 6.1866 16.6667 7.29167C16.6667 8.39674 16.2277 9.45654 15.4463 10.2379C14.6649 11.0193 13.6051 11.4583 12.5 11.4583C11.3949 11.4583 10.3351 11.0193 9.55372 10.2379C8.77232 9.45654 8.33333 8.39674 8.33333 7.29167ZM8.33333 13.5417C6.952 13.5417 5.62724 14.0904 4.65049 15.0672C3.67373 16.0439 3.125 17.3687 3.125 18.75C3.125 19.5788 3.45424 20.3737 4.04029 20.9597C4.62634 21.5458 5.4212 21.875 6.25 21.875H18.75C19.5788 21.875 20.3737 21.5458 20.9597 20.9597C21.5458 20.3737 21.875 19.5788 21.875 18.75C21.875 17.3687 21.3263 16.0439 20.3495 15.0672C19.3728 14.0904 18.048 13.5417 16.6667 13.5417H8.33333Z"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Profil</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="adminprestasi.php"
              >
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 25 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.5001 3.125L1.04175 9.375L12.5001 15.625L21.8751 10.5104V17.7083H23.9584V9.375M5.20841 13.7292V17.8958L12.5001 21.875L19.7917 17.8958V13.7292L12.5001 17.7083L5.20841 13.7292Z"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Prestasi</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="adminriwayat.php"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_296_30)">
                    <path
                      d="M12 0C8.43281 0 5.23594 1.56562 3.04219 4.04062L0 0.998437V9H8.00156L5.17969 6.17813C6.825 4.24219 9.25781 3 12 3C16.9688 3 21 7.02656 21 12C21 16.9734 16.9688 21 12 21C9.51562 21 7.26562 19.9922 5.63437 18.3656L3.51562 20.4844C5.69063 22.6547 8.69063 24 12 24C18.6281 24 24 18.6281 24 12C24 5.37188 18.6281 0 12 0ZM11.0016 5.00156V13.0031H17.0016V11.0016H13.0031V5.00156H11.0016Z"
                      fill="currentColor"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_296_30">
                      <rect width="24" height="24" fill="currentColor" />
                    </clipPath>
                  </defs>
                </svg>
                <span class="ml-4">Riwayat Prestasi</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-full bg-yellow-500 rounded-tr-lg rounded-br-lg -z-10"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-white hover:text-blue-900"
                href="adminakses.php"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M22 8.293C22 11.769 19.17 14.587 15.68 14.587C15.044 14.587 13.594 14.441 12.889 13.855L12.007 14.733C11.488 15.25 11.628 15.402 11.859 15.652C11.955 15.757 12.067 15.878 12.154 16.051C12.154 16.051 12.889 17.075 12.154 18.1C11.713 18.685 10.478 19.504 9.06796 18.1L8.77396 18.392C8.77396 18.392 9.65496 19.417 8.92096 20.442C8.47996 21.027 7.30396 21.612 6.27496 20.588L5.24696 21.612C4.54096 22.315 3.67896 21.905 3.33696 21.612L2.45396 20.734C1.63096 19.914 2.11096 19.026 2.45396 18.684L10.096 11.074C10.096 11.074 9.36096 9.904 9.36096 8.294C9.36096 4.818 12.191 2 15.681 2C19.171 2 22 4.818 22 8.293ZM15.681 10.489C16.2643 10.4901 16.8241 10.2594 17.2374 9.84782C17.6507 9.4362 17.8836 8.8773 17.885 8.294C17.8844 8.00509 17.827 7.71912 17.716 7.4524C17.6049 7.18568 17.4424 6.94345 17.2378 6.73954C17.0331 6.53562 16.7903 6.37401 16.5232 6.26393C16.256 6.15386 15.9699 6.09747 15.681 6.098C15.392 6.09747 15.1059 6.15386 14.8387 6.26393C14.5716 6.37401 14.3288 6.53562 14.1241 6.73954C13.9195 6.94345 13.757 7.18568 13.646 7.4524C13.5349 7.71912 13.4775 8.00509 13.477 8.294C13.4783 8.8773 13.7112 9.4362 14.1245 9.84782C14.5378 10.2594 15.0977 10.4901 15.681 10.489Z"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Manajemen Akses</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="../luaran/signin.php"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"
                    class="w-5 h-5"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Sign Out</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-gray-200 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500">
          <a class="ml-6 text-lg font-bold text-gray-800" href="#">
            SIMAPRES
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="admindashboard.php"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.7715 4.94527C12.6988 4.87573 12.6021 4.83691 12.5015 4.83691C12.4009 4.83691 12.3041 4.87573 12.2314 4.94527L3.24219 13.5327C3.20401 13.5692 3.17364 13.6131 3.15291 13.6617C3.13218 13.7103 3.12152 13.7626 3.12158 13.8154L3.12012 21.875C3.12012 22.2894 3.28474 22.6868 3.57776 22.9798C3.87079 23.2728 4.26822 23.4375 4.68262 23.4375H9.375C9.5822 23.4375 9.78091 23.3551 9.92743 23.2086C10.0739 23.0621 10.1563 22.8634 10.1563 22.6562V16.0156C10.1563 15.912 10.1974 15.8126 10.2707 15.7394C10.3439 15.6661 10.4433 15.625 10.5469 15.625H14.4531C14.5567 15.625 14.6561 15.6661 14.7293 15.7394C14.8026 15.8126 14.8438 15.912 14.8438 16.0156V22.6562C14.8438 22.8634 14.9261 23.0621 15.0726 23.2086C15.2191 23.3551 15.4178 23.4375 15.625 23.4375H20.3154C20.7298 23.4375 21.1273 23.2728 21.4203 22.9798C21.7133 22.6868 21.8779 22.2894 21.8779 21.875V13.8154C21.878 13.7626 21.8673 13.7103 21.8466 13.6617C21.8259 13.6131 21.7955 13.5692 21.7573 13.5327L12.7715 4.94527Z"
                    fill="currentColor"
                  />
                  <path
                    d="M23.9702 11.9214L20.3179 8.42725V3.125C20.3179 2.9178 20.2356 2.71909 20.0891 2.57257C19.9426 2.42606 19.7438 2.34375 19.5366 2.34375H17.1929C16.9857 2.34375 16.787 2.42606 16.6405 2.57257C16.4939 2.71909 16.4116 2.9178 16.4116 3.125V4.6875L13.5835 1.9834C13.3189 1.71582 12.9253 1.5625 12.5 1.5625C12.0762 1.5625 11.6836 1.71582 11.419 1.98389L1.03322 11.9204C0.729511 12.2134 0.691425 12.6953 0.967792 13.0127C1.03719 13.0928 1.12217 13.158 1.21755 13.2042C1.31293 13.2504 1.41672 13.2768 1.5226 13.2816C1.62848 13.2864 1.73424 13.2697 1.83344 13.2324C1.93264 13.195 2.02321 13.1379 2.09963 13.0645L12.2315 3.38281C12.3042 3.31327 12.4009 3.27446 12.5015 3.27446C12.6021 3.27446 12.6988 3.31327 12.7715 3.38281L22.9043 13.0645C23.0536 13.2076 23.2535 13.2857 23.4603 13.2817C23.667 13.2777 23.8638 13.1918 24.0073 13.043C24.3071 12.7324 24.2822 12.2197 23.9702 11.9214Z"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="adminprofil.php"
              >
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 25 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8.33333 7.29167C8.33333 6.1866 8.77232 5.12679 9.55372 4.34539C10.3351 3.56399 11.3949 3.125 12.5 3.125C13.6051 3.125 14.6649 3.56399 15.4463 4.34539C16.2277 5.12679 16.6667 6.1866 16.6667 7.29167C16.6667 8.39674 16.2277 9.45654 15.4463 10.2379C14.6649 11.0193 13.6051 11.4583 12.5 11.4583C11.3949 11.4583 10.3351 11.0193 9.55372 10.2379C8.77232 9.45654 8.33333 8.39674 8.33333 7.29167ZM8.33333 13.5417C6.952 13.5417 5.62724 14.0904 4.65049 15.0672C3.67373 16.0439 3.125 17.3687 3.125 18.75C3.125 19.5788 3.45424 20.3737 4.04029 20.9597C4.62634 21.5458 5.4212 21.875 6.25 21.875H18.75C19.5788 21.875 20.3737 21.5458 20.9597 20.9597C21.5458 20.3737 21.875 19.5788 21.875 18.75C21.875 17.3687 21.3263 16.0439 20.3495 15.0672C19.3728 14.0904 18.048 13.5417 16.6667 13.5417H8.33333Z"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Profil</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="adminprestasi.php"
              >
                <svg
                  width="25"
                  height="25"
                  viewBox="0 0 25 25"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.5001 3.125L1.04175 9.375L12.5001 15.625L21.8751 10.5104V17.7083H23.9584V9.375M5.20841 13.7292V17.8958L12.5001 21.875L19.7917 17.8958V13.7292L12.5001 17.7083L5.20841 13.7292Z"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Prestasi</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="adminriwayat.php"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_296_30)">
                    <path
                      d="M12 0C8.43281 0 5.23594 1.56562 3.04219 4.04062L0 0.998437V9H8.00156L5.17969 6.17813C6.825 4.24219 9.25781 3 12 3C16.9688 3 21 7.02656 21 12C21 16.9734 16.9688 21 12 21C9.51562 21 7.26562 19.9922 5.63437 18.3656L3.51562 20.4844C5.69063 22.6547 8.69063 24 12 24C18.6281 24 24 18.6281 24 12C24 5.37188 18.6281 0 12 0ZM11.0016 5.00156V13.0031H17.0016V11.0016H13.0031V5.00156H11.0016Z"
                      fill="currentColor"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_296_30">
                      <rect width="24" height="24" fill="currentColor" />
                    </clipPath>
                  </defs>
                </svg>
                <span class="ml-4">Riwayat Prestasi</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-full bg-yellow-500 rounded-tr-lg rounded-br-lg -z-10"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-white hover:text-blue-900"
                href="adminakses.php"
              >
                <svg
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M22 8.293C22 11.769 19.17 14.587 15.68 14.587C15.044 14.587 13.594 14.441 12.889 13.855L12.007 14.733C11.488 15.25 11.628 15.402 11.859 15.652C11.955 15.757 12.067 15.878 12.154 16.051C12.154 16.051 12.889 17.075 12.154 18.1C11.713 18.685 10.478 19.504 9.06796 18.1L8.77396 18.392C8.77396 18.392 9.65496 19.417 8.92096 20.442C8.47996 21.027 7.30396 21.612 6.27496 20.588L5.24696 21.612C4.54096 22.315 3.67896 21.905 3.33696 21.612L2.45396 20.734C1.63096 19.914 2.11096 19.026 2.45396 18.684L10.096 11.074C10.096 11.074 9.36096 9.904 9.36096 8.294C9.36096 4.818 12.191 2 15.681 2C19.171 2 22 4.818 22 8.293ZM15.681 10.489C16.2643 10.4901 16.8241 10.2594 17.2374 9.84782C17.6507 9.4362 17.8836 8.8773 17.885 8.294C17.8844 8.00509 17.827 7.71912 17.716 7.4524C17.6049 7.18568 17.4424 6.94345 17.2378 6.73954C17.0331 6.53562 16.7903 6.37401 16.5232 6.26393C16.256 6.15386 15.9699 6.09747 15.681 6.098C15.392 6.09747 15.1059 6.15386 14.8387 6.26393C14.5716 6.37401 14.3288 6.53562 14.1241 6.73954C13.9195 6.94345 13.757 7.18568 13.646 7.4524C13.5349 7.71912 13.4775 8.00509 13.477 8.294C13.4783 8.8773 13.7112 9.4362 14.1245 9.84782C14.5378 10.2594 15.0977 10.4901 15.681 10.489Z"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Manajemen Akses</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="../luaran/signin.php"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"
                    class="w-5 h-5"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Sign Out</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-blue-950 shadow-md">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-white"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>

            <div class="flex justify-center flex-1 lg:mr-32"></div>

            <!-- Profil menu -->
            <ul>
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none items-end"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  <img
                    class="object-cover w-8 h-8 rounded-full"
                    src="../img/profiladmin.png"
                    alt=""
                    aria-hidden="true"
                  />
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md bg-transparent"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                        href="adminprofil.php"
                      >
                        <img
                          src="../img/profiladmin.png"
                          class="w-4 h-4 mr-3"
                        />

                        <span>Profil</span>
                      </a>
                    </li>

                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                        href="../luaran/signin.php"
                      >
                        <img src="../img/logout.svg" class="w-4 h-4 mr-3" />

                        <span>Sign out</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full overflow-y-auto mb-10">
          <div class="container px-6 mx-auto grid">
            <h2 class="mt-6 text-2xl font-semibold text-gray-700">
              Manajemen Hak Akses
            </h2>

            <div class="flex justify-end mb-5">
              <a
                href="tambahadmin.php"
                class="text-white bg-blue-950 hover:bg-blue-500 font-medium rounded-lg text-sm px-3 py-2 text-center mb-2 items-center w-40"
              >
                Tambah Admin
              </a>
            </div>
           

            <div class="w-full rounded-lg shadow-xs" >
              <div class="w-full">
                <table class="w-full min-w-full stripe hover" id="example">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3 text-center">ID Admin</th>
                      <th class="px-4 py-3 text-center">Nama</th>
                      <th class="px-4 py-3 text-center">Email</th>
                      <th class="px-4 py-3 text-center">Level</th>
                      <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                  </thead>
                  <?php 
                      $sql_k = "SELECT id_user, nama, email,password, level FROM aktor ORDER BY id_user";
                      $query_k = mysqli_query($koneksi, $sql_k);
                      $no = 1;
                      while ($data_k = mysqli_fetch_row($query_k)) {
                      $id_user = $data_k[0];
                      $nama = $data_k[1];
                      $email = $data_k[2];
                      $password = $data_k[3];
                      $level = $data_k[4];
                      ?>
                      <tr>
                  <tbody class="bg-white divide-y">
                    <tr class="text-gray-700 dark:text-gray-400" id="myTable">
                      <!-- Nomer -->
                      <td class="px-4 py-3 text-sm text-center"><?php echo $no; ?></td>
                      <!-- Nama & Prodi -->
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <div>
                            <p class="font-semibold text-center"><?php echo $nama; ?></td>
                              
                            </p>
                          </div>
                        </div>
                      </td>
                      <!-- Email -->
                      <td class="px-4 py-3 text-sm text-center"><?php echo $email; ?></td>
                        
                      </td>
                      <!-- Level -->
                      <td class="px-4 py-3 text-sm text-center"><?php echo $level; ?></td>
                      
                      </td>
                      <!-- Aksi -->
                      <td class="px-4 py-3 text-xs text-center">
                        <a
                        href="adminedit.php"
                          onclick="editFunction()"
                          class="text-white bg-blue-950 hover:bg-blue-500 hover:text-blue-950 font-medium rounded-lg text-sm px-5 py-2 text-center mb-2 items-center w-40 m-2"
                        ><i class="fas fa-edit"></i>
                          edit
                        </a>

                        <a
                          href="javascript:void(0);"
                          onclick="hapusFunction()"
                          class="text-white bg-red-600 hover:bg-red-300 hover:text-red-600 font-medium rounded-lg text-sm px-5 py-2 text-center mb-2 items-center w-40 m-2"
                        >
                          hapus 
                        </a>
                      </td>
                    </tr>
                    <?php $no++;}?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </main>
        <footer>
          <hr />
          <div class="p-8 text-center -z-10">
            <h1>Copyright © 2023 Vokasi UB. All rights reserved.</h1>
          </div>
        </footer>
      </div>
    </div>

    <!-- JavaScript -->
    <script>
      function editFunction() {
        console.log("Tombol Edit Diklik");
        //editata=<?php echo $id_user; ?>"
        window.location.href = "adminedit.php";
        
      }

      function hapusFunction() {
        console.log("Tombol Hapus Diklik");
        // Hapus
        var confirmDelete = confirm("Apakah Anda yakin ingin menghapus?");
        if (confirmDelete) {
          // Hapus baris tabel saat konfirmasi diterima
          window.location.href = "hapus.php";
          var row = document.getElementById("myTable").deleteRow(-1);
          console.log("Data dihapus dari tabel.");
         
        }
     
      }
    </script>
    <script>
      $(document).ready(function () {
        var table = $("#example")
          .DataTable({
            responsive: true,
          })
          .columns.adjust()
          .responsive.recalc();
      });
    </script>
  </body>
</html>