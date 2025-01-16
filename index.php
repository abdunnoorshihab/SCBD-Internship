<?php require_once('header.php') ?>
    <div class="bg-gray-100 md:container md:mx-auto">
        <!-- Main Content -->
            <main class="container mx-auto px-6 py-8">
        <!-- Banner -->
            <div class="relative max-w-full overflow-hidden">
            
                <div id="carousel" class="flex w-[500%] transition-transform duration-500">
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner2.png" alt="Slide 1">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/cover.jpg" alt="Slide 2">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner3.png" alt="Slide 3">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner4.jpg" alt="Slide 4">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner5.jpg" alt="Slide 5">
                    </div>
                    <div class="w-full flex-shrink-0">
                    <img class="w-full h-96 object-cover rounded-lg" src="img/banner6.png" alt="Slide 6">
                    </div>
                </div>

            <!-- Navigation Buttons -->
            <button
                id="prev"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-500 bg-opacity-50 text-white p-2 rounded-full z-10">
                &#10094;
            </button>
            <button
                id="next"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-500 bg-opacity-50 text-white p-2 rounded-full z-10">
                &#10095;
            </button>

            <!-- Pagination Dots -->
            <div id="pagination" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            </div>
            </div>


        <!-- Quick Links -->
            <style>
                .swiper-slide{
                    height:120px;
                }
                .swiper-wrapper{
                    height: 120px;
                }
            </style>
            <div class="container mx-auto p-2">
                <h2 class=" text-2xl font-semibold mb-4 mt-6">Quick Links</h2>
                <div class="relative group w-full h-full mx-auto px-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Card 1 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="https://www.swisscontact.org/en/countries/bangladesh" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="text-xs text-center">Swisscontact Bangladesh</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="it_requisition.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">IT Requisition</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="staff-list.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">Staff Directory</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="https://www.swisscontact.org/_Resources/Persistent/c/9/8/6/c986fe174ff1db4cc0372a4a634d9f2fc7cac23e/230405%20RfP%20MIS%20Development%2C%20BYETS.pdf" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">MIS SCBD</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="request_for_proposal.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="py-3">
                                        <h3 class="text-xs text-center">Request For Proposal</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="https://support.microsoft.com/en-us/account-billing/how-to-use-two-step-verification-with-your-microsoft-account-c7910146-672f-01e9-50a0-93b4585e7eb4" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="pb-2">
                                        <h3 class="text-xs text-center">Microsoft Sign in Security Authenticator</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="https://login.microsoftonline.com/72f988bf-86f1-41af-91ab-2d7cd011db47/oauth2/authorize?client%5Fid=00000003%2D0000%2D0ff1%2Dce00%2D000000000000&response%5Fmode=form%5Fpost&response%5Ftype=code%20id%5Ftoken&resource=00000003%2D0000%2D0ff1%2Dce00%2D000000000000&scope=openid&nonce=22E654F5D8E02A45C96BAB344534CC28F2C923A6F4E097EB%2D2B6F9942E3B86141A336DDC0B23BC7D0C58127C22C724486267379F011BCBFD6&redirect%5Furi=https%3A%2F%2Fmicrosoft%2Esharepoint%2Ecom%2F%5Fforms%2Fdefault%2Easpx&state=OD0w&claims=%7B%22id%5Ftoken%22%3A%7B%22xms%5Fcc%22%3A%7B%22values%22%3A%5B%22CP1%22%5D%7D%7D%7D&wsucxt=1&cobrandid=11bd8083%2D87e0%2D41b5%2Dbb78%2D0bc43c8a8e8a&client%2Drequest%2Did=21fe77a1%2Dc025%2D1000%2D2a2d%2D99044d45c7b6" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">Sharepoint</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="https://www.swisscontact.org/en/news" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">SCBD News</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="https://www.guardianlife.com.bd/" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="py-3">
                                        <h3 class="text-xs text-center">Guardian Life Insurance</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="https://katalyst.com.bd/index.html?i=1" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="py-3">
                                        <h3 class="text-xs text-center">Katalyst</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden w-64">
                                <a href="index.php" class="bg-white p-2 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h5l2-3h4a2 2 0 012 2v12a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-xs text-center">Portal Dashboard</h3>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Swiper Navigation buttons -->
                        <div class="swiper-button-next text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="swiper-button-prev text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    </div>
                </div>
            </div>

        <!-- Forms & Templates -->
            <div class="container mx-auto p-2">
                <h1 class="text-2xl font-bold text-gray-800 my-4">Forms & Templates</h1>

                <!-- Search Bar -->

                <div class="flex justify-between mb-5">
                <div class="w-full">
                    <div class="relative w-full max-w-md">
                        <input
                            id="search_text_forms" 
                            type="text"
                            class="w-full p-3 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Search for forms..."
                        />
                        <button class="absolute right-3 top-3 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="w-full flex justify-end">
                    <button type="button" class="py-2 px-2 w-1/4 text-sm font-semibold text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <a href="forms.php">Show all Forms</a>
                    </button>
                </div>

                </div>
                
                <!-- Results Table -->
                <div id="result_forms" class="bg-white shadow-lg rounded-lg overflow-hidden h-60"> <!-- Changed ID -->
                    <!-- Fetched data will load here -->
                </div>

            </div>
        <!-- Staff Directory Section -->
            <div class="container mx-auto p-2">
                <h1 class="text-2xl font-bold text-gray-800 my-4">Staff Directory</h1>

                <!-- Search Bar -->

                <div class="flex justify-between mb-5">
                <div class="w-full">
                    <div class="relative w-full max-w-md">
                        <input
                            id="search_text_staff" 
                            type="text"
                            class="w-full p-3 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Search for forms..."
                        />
                        <button class="absolute right-3 top-3 text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="w-full flex justify-end">
                    <button type="button" class="py-2 px-2 w-1/4 text-sm font-semibold text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <a href="staff-list.php">Show all Staffs</a>
                    </button>
                </div>

                </div>

                <!-- Results Table -->
                <div id="result_staff" class="bg-white shadow-lg rounded-lg overflow-hidden h-60"> <!-- Changed ID -->
                    <!-- Fetched data will load here -->
                </div>

            </div>
        <!-- Vendors Section -->
            <div class="container mx-auto p-2">
                <h1 class="text-2xl font-bold text-gray-800 my-4">Vendors</h1>

                <!-- Search Bar -->

                <div class="flex justify-between mb-5">
                    <div class="w-full">
                        <div class="relative w-full max-w-md">
                            <input
                                id="search_text_vendor" 
                                type="text"
                                class="w-full p-3 border rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                placeholder="Search for Vendors..."
                            />
                            <button class="absolute right-3 top-3 text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="w-full flex justify-end">
                        <button type="button" class="py-2 px-2 w-1/4 text-sm font-semibold text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        <a href="staff-list.php">Show all Vendors</a>
                        </button>
                    </div>

                    </div>

                <!-- Results Table -->
                    <div id="result_vendor" class="bg-white shadow-lg rounded-lg overflow-hidden h-60">
                        <!-- Fetched data will load here -->
                    </div>
            </div>

        <!-- Project Templates -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold my-4">Project Templates</h2>
                <div class="container relative group w-full h-full mx-auto px-4">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <!-- Card 1 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/astha.png" alt="Astha Project" class="object-fill w-24 h-24 flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">Astha</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 2 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/prabriddhi_logo.png" alt="Probriddhi Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">Probriddhi</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 3 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/sarathi.jpg" alt="Sarathi Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">Sarathi</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 4 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/bmmdp.png" alt="BMMDB Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">BMMDB</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 5 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/byets.png" alt="BYETS Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">BYETS</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- Card 6 -->
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/bskillful.webp" alt="M4C Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">B-Skillful</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/progress.jpg" alt="M4C Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">Progress</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/uttoron.png" alt="M4C Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">Uttoron</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/dblp.icon.png" alt="M4C Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">DBLP</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide rounded-lg shadow-lg overflow-hidden transform transition-transform hover:scale-105">
                                <a href="Project-page.php" class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition flex flex-col justify-between">
                                    <div class="flex justify-center items-center h-1/2">
                                        <!-- Icon Placeholder -->
                                        <img src="img/M4c logo.jpg" alt="M4C Project" class="w-24 h-24 object-fill flex m-auto rounded-full">
                                    </div>
                                    <div class="mt-4">
                                        <h3 class="text-sm font-semibold text-center">M4C</h3>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Swiper Navigation buttons -->
                        <div class="swiper-button-next text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="swiper-button-prev text-black p-5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                        <!-- Swiper Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
        <!-- Events -->
           
            <section id="tutorials" class="mb-8 w-full">
                <h2 class="text-2xl font-semibold my-4">Events in Swisscontact</h2>
                <div class="swiper my-tutorial-swiper">
                    <div class="swiper-wrapper">
                        
                        <div class="swiper-slide transform transition-transform hover:scale-105">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 h-96">
                                <a href="https://www.swisscontact.org/en/countries/bangladesh/events">
                                    <img class="rounded-t-lg h-48 w-full object-cover" src="img/ev1.webp" alt="International Women's Day 2022" />
                                </a>
                                <div class="p-5 h-48 overflow-y-scroll">
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        International Women's Day 2022
                                    </a>
                                    <div class="h-20 overflow-y-scroll">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        On March 8, 2023, Swisscontact marked International Women's Day with a special event at its Bangladesh country office in Dhaka.
                                        </p>
                                    </div>
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2 mt-3">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide transform transition-transform hover:scale-105">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 h-96">
                                <a href="https://www.swisscontact.org/en/countries/bangladesh/events">
                                    <img class="rounded-t-lg h-48 w-full object-cover" src="img/ev2.webp" alt="International Men's Day 2022" />
                                </a>
                                <div class="p-5 h-48 overflow-y-scroll">
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        International Men's Day 2022
                                    </a>
                                    <div class="h-20 overflow-y-scroll">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            Swisscontact Bangladesh organised an outdoor event at the office garden area on November 20, 2022, from 03:00 p.m. to celebrate International Men’s Day 2022.
                                        </p>
                                    </div>
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2 mt-3">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide transform transition-transform hover:scale-105">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 h-96">
                                <a href="https://www.swisscontact.org/en/countries/bangladesh/events">
                                    <img class="rounded-t-lg h-48 w-full object-cover" src="img/ev3.webp" alt="Gala Night, 2022" />
                                </a>
                                <div class="p-5 h-48 overflow-y-scroll">
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Gala Night, 2022
                                    </a>
                                    <div class="h-20 overflow-y-scroll">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Swisscontact hosted a Gala Night to celebrate an evening with Philippe Schneuwly, CEO of Swisscontact, Manish Pandey, Director- South Asia and all staff of Swisscontact Bangladesh on 18th of October, at Lakeshore La Vita Hall.
                                        </p>
                                    </div>
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2 mt-3">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide transform transition-transform hover:scale-105">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 h-96">
                                <a href="https://www.swisscontact.org/en/countries/bangladesh/events">
                                    <img class="rounded-t-lg h-48 w-full object-cover" src="img/ev4.webp" alt="Football Tournament, 2022" />
                                </a>
                                <div class="p-5 h-48 overflow-y-scroll">
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Football Tournament, 2022
                                    </a>
                                    <div class="h-20 overflow-y-scroll">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Swisscontact Bangladesh participated in the 15th Ascent Corporate Football Tournament held at STM Hall, Scholastica, Uttara from August 11 to August 20, 2022.
                                        </p>
                                    </div>
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2 mt-3">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide transform transition-transform hover:scale-105">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 h-96">
                                <a href="https://www.swisscontact.org/en/countries/bangladesh/events">
                                    <img class="rounded-t-lg h-48 w-full object-cover" src="img/ev5.webp" alt="Family Day, 2022" />
                                </a>
                                <div class="p-5 h-48 overflow-y-scroll">
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Family Day, 2022
                                    </a>
                                    <div class="h-20 overflow-y-scroll">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Swisscontact Bangladesh hosted a Family Day event on 20th of May at the new Swisscontact Bangladesh office garden.
                                        </p>
                                    </div>
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2 mt-3">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide transform transition-transform hover:scale-105">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 h-96">
                                <a href="https://www.swisscontact.org/en/countries/bangladesh/events">
                                    <img class="rounded-t-lg h-48 w-full object-cover" src="img/ev6.webp" alt="Competition on Project Idea Submission 2021" />
                                </a>
                                <div class="p-5 h-48 overflow-y-scroll">
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Competition on Project Idea Submission 2021 
                                    </a>
                                    <div class="h-20 overflow-y-scroll">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            Swisscontact Bangladesh organised an outdoor event at the office garden area on November 20, 2022, from 03:00 p.m. to celebrate International Men’s Day 2022.
                                        </p>
                                    </div>
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2 mt-3">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-slide transform transition-transform hover:scale-105">
                            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 h-96">
                                <a href="https://www.swisscontact.org/en/countries/bangladesh/events">
                                    <img class="rounded-t-lg h-48 w-full object-cover" src="img/ev7.webp" alt="Introductory Workshop on 'An Introduction to Inclusive Systems Development (ISD) Approach' 2021" />
                                </a>
                                <div class="p-5 h-48 overflow-y-scroll">
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    Introductory Workshop on "An Introduction to Inclusive Systems Development (ISD) Approach" 2021
                                    </a>
                                    <div class="h-20 overflow-y-scroll">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                        Inclusive Systems Development (ISD) is an increasingly popular development approach that calls for an in-depth analysis of the “system” to identify the root causes of problems and addressing the underlying market constraints through a facilitative approach, ensuring sustainability and scalability of development solutions. 
                                        </p>
                                    </div>
                                    <a href="https://www.swisscontact.org/en/countries/bangladesh/events"
                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gradient-to-r from-gray-400 to-blue-600 rounded-lg shadow-md hover:from-blue-700 hover:to-blue-600 hover:text-white transform transition-transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2 mt-3">
                                        Read more
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <!-- Add Swiper navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- Add Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </section>

        <!-- Knowledge Sharing -->
            <section id="knowledge" class="mb-8">
                <h2 class="text-2xl font-semibold my-4">Knowledge Sharing</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">Best Practices for Data Security</h3>
                    <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">Effective IT Communication Strategies</h3>
                    <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">Optimizing Your IT Infrastructure</h3>
                    <a href="knowledge_sharing.php" class="text-blue-500 hover:underline">Read Article</a>
                </div>
                </div>
            </section>

        <!-- Gender Equality -->
            <section id="guidelines" class="mb-8">
                <h2 class="text-2xl font-semibold my-4">Gender Equality</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Guideline Card -->
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2"><a href="gender_equality.php">Policies</a></h3>
                    <p class="text-gray-600">Ensure all data is protected according to the company's data protection policies.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a>
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">E-Learning Course</h3>
                    <p class="text-gray-600">Only authorized personnel should have access to critical systems and information.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a>
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2">Incident Reporting</h3>
                    <p class="text-gray-600">Report any incidents immediately to ensure swift resolution.<br><a href="gender_equality.php" class="text-blue-500 hover:underline">Read More</a></p>
                </div>
                </div>
            </section>
  </div>
<?php require_once('footer.php') ?>
