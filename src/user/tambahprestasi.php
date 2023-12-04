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
                href="index.php"
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
                href="profil.php"
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
              <span
                class="absolute inset-y-0 left-0 w-full bg-yellow-500 rounded-tr-lg rounded-br-lg -z-10"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-white hover:text-blue-900"
                href="prestasi.php"
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
                href="riwayat.php"
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
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="verifikasi.php"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H160v400Zm278-58L296-440l58-58 84 84 168-168 58 58-226 226Zm-278 58v-480 480Z"
                    class="w-5 h-5"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Status Verifikasi</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="../luaran/firstscreen.php"
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
                href="index.php"
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
                href="profil.php"
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
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-white hover:text-blue-900"
                href="prestasi.php"
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
                href="riwayat.php"
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
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="verifikasi.php"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  height="24"
                  viewBox="0 -960 960 960"
                  width="24"
                >
                  <path
                    d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H160v400Zm278-58L296-440l58-58 84 84 168-168 58 58-226 226Zm-278 58v-480 480Z"
                    class="w-5 h-5"
                    fill="currentColor"
                  />
                </svg>
                <span class="ml-4">Status Verifikasi</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 text-black hover:text-blue-900"
                href="../luaran/firstscreen.php"
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
                    src="../img/profil.jpg"
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
                        href="profil.php"
                      >
                        <img src="../img/profil.svg" class="w-4 h-4 mr-3" />

                        <span>Profil</span>
                      </a>
                    </li>

                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                        href="../luaran/firstscreen.php"
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
        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2 class="my-6 text-2xl font-semibold text-gray-700">
              Tambah Prestasi
            </h2>
          </div>

          <form class="px-6 mx-auto" action="konfirmasitambahprestasi.php" method="POST">
            <!-- Nama -->
            <div class="mb-6">
              <label
                for="nama"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Nama</label
              >
              <input
                type="text"
                id="nama"
                name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="nama"
                required
              />
            </div>
            <!-- Bidang -->
            
            <div class="mb-6">
              <label
                for="bidang"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Bidang</label
              >
              <select
                id="bidang"
                name="bidang"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih Bidang</option>
                <option value="Penalaran dan kreativitas">Penalaran dan Kreativitas</option>
                <option value="Seni, minat dan bakat">Seni, Minat dan Bakat</option>
                <option value="Kewirausahaan">Kewirausahaan</option>
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
                name="jenis_prestasi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih Jenis Prestasi</option>
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
                name="nama_perlombaan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Nama Perlombaan"
                required
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
                name="kategori"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Kategori / Kelas Perlombaan"
                required
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
                name="judul_karya"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Judul Karya"
                required
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
                name="link_informasi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Link Informasi Lomba"
                required
              />
            </div>
            <!-- Lokasi -->
            <div class="mb-6">
              <label
                for="lokasi"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Lokasi</label
              >
              <input
                type="text"
                id="lokasi"
                name="lokasi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Lokasi"
                required
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
                name="tahun"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih tahun</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
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
                name="jumlah_anggota"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Jumlah Anggota"
                required
              />
            </div>

            <!-- Nama Lembaga Ormawa -->
            <div class="mb-6">
              <label
                for="ormawa"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Nama Lembaga Ormawa</label
              >
              <input
                type="text"
                id="ormawa"
                name="nama_lembaga_ormawa"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Nama Lembaga Ormawa"
                required
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
                name="program"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih program</option>
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
                name="tingkat"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih Tingkat</option>
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
                name="jenis_kepesertaan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih Jenis Kepesertaan</option>
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
                name="capaian"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih Capaian</option>
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
                name="jumlah_peserta"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Jumlah Peserta"
                required
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
                name="jumlah_pt"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih Jumlah PT</option>
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
                name="jumlah_provinsi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih Jumlah Propinsi</option>
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
                name="jumlah_negara"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              >
                <option selected>Pilih Jumlah Negara</option>
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
                name="nama_dosen_pembimbing"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="Nama Dosen Pembimbing "
                required
              />
            </div>
            <!-- No WA Mahasiswa -->
            <div class="mb-6">
              <label
                for="no_wa"
                class="block mb-2 text-sm font-medium text-gray-900"
                >No WA Mahasiswa</label
              >
              <input
                type="text"
                id="no_wa"
                name="no_wa_mahasiswa"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                placeholder="No WA Mahasiswa"
                required
              />
            </div>

            <div class="mb-6">
              <label
                for="file_input"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Surat Tugas Pembimbing</label
              >
              <input
                type="file"
                id="file_input"
                name="surat_dosen"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                placeholder="Nama Prestasi"
                required
              />
            </div>
            <div class="mb-6">
              <label
                for="file_input"
                class="block mb-2 text-sm font-medium text-gray-900"
                >Bukti Prestasi</label
              >
              <input
                type="file"
                id="file_input"
                name="bukti_prestasi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1"
                placeholder="Bukti Prestasi"
                required
              />
            </div>
            <!-- SUBMIT -->
            <div class="flex justify-end">
              <input
                type="submit"
                name="submit"
                onclick="openModal()"
                class="text-white bg-blue-950 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2 text-center mb-16"
              />
            </div>
          </form>

          <!-- Modal -->
          <div
            id="successModal"
            class="fixed hidden items-center justify-center m-10"
          >
            <div
              class="bg-white p-8 rounded-lg shadow-lg text-center fixed top-1/4 left-1/3 right-1/3 bottom-1/3 transform"
            >
              <!-- Konten modal -->
              <img
                src="../img/checklist.png"
                alt="Checkmark"
                class="mx-auto mb-4 mt-10"
                style="width: 50px"
              />
              <p class="text-sm font-medium text-gray-900 mb-4">
                Dokumen berhasil dikirimkan! <br />
                Tunggu proses verifikasi.
              </p>
              <button
                onclick="closeModal()"
                class="text-white bg-blue-950 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"
              >
                Close
              </button>
            </div>
          </div>

          <footer>
            <hr />
            <div class="p-8 text-center">
              <h1>Copyright © 2023 Vokasi UB. All rights reserved.</h1>
            </div>
          </footer>
        </main>
      </div>
    </div>

    <!-- Script -->
    <script>
      function openModal() {
        document.getElementById("successModal").classList.remove("hidden");
      }

      function closeModal() {
        document.getElementById("successModal").classList.add("hidden");
      }
    </script>
  </body>
</html>