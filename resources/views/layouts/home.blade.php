<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite(['resources/css/output.css'])
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <title>Home Page</title>
    </head>
    <body>
        <nav class="mx-auto mt-[30px] flex max-h-12 w-full max-w-[1130px] items-center justify-between">
            <div class="flex gap-[30px]">
                <div class="h-[46px] w-[137px] shrink-0 overflow-hidden">
                    <img class="h-full w-full object-contain" src="assets/images/logos/maga-portal-logo.png" alt="" />
                </div>
                <div class="h-12 w-px shrink-0 bg-[#E8EBF4]"></div>
                <form class="relative w-[450px]">
                    <label for="search" class="pointer-events-none flex">
                        <div class="absolute left-5 top-1/2 h-5 w-5 shrink-0 -translate-y-1/2 overflow-hidden">
                            <img class="h-full w-full object-contain" src="assets/images/icons/search-black.svg" alt="" />
                        </div>
                    </label>
                    <input
                        class="w-full rounded-full px-[50px] py-3 font-semibold ring-1 ring-[#E8EBF4] transition-all duration-300 placeholder:font-normal focus:outline-none focus:ring-2 focus:ring-maga-orange"
                        type="text"
                        name="search"
                        placeholder="Search hot trendy news today..."
                    />
                </form>
            </div>
            <div class="flex gap-3">
                <a href="#">
                    <div class="w-[145px] rounded-full border px-[22px] py-3">
                        <p class="w-full text-nowrap text-center text-base font-semibold">Upgrade Pro</p>
                    </div>
                </a>
                <a href="#">
                    <div class="flex max-w-[149px] gap-[10px] rounded-full bg-maga-orange px-[22px] py-3">
                        <div class="h-6 w-6 shrink-0 overflow-hidden">
                            <img class="h-full w-full object-contain" src="assets/images/icons/favorite-chart-white.svg" alt="" />
                        </div>
                        <p class="w-full text-center text-base font-bold text-white">Post Ads</p>
                    </div>
                </a>
            </div>
        </nav>

        <nav id="categories" class="mx-auto mt-[30px] flex max-h-12 w-full max-w-[1130px] items-center justify-between gap-4">
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="assets/images/icons/heart-black.svg" alt="" />
                    </div>
                    <p class="text-center font-semibold">Health</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="assets/images/icons/status-up-black.svg" alt="" />
                    </div>
                    <p class="text-center font-semibold">Business</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="assets/images/icons/car-black.svg" alt="" />
                    </div>
                    <p class="text-center font-semibold">Automotive</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="assets/images/icons/global-black.svg" alt="" />
                    </div>
                    <p class="text-center font-semibold">Entertainment</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="assets/images/icons/coffee-black.svg" alt="" />
                    </div>
                    <p class="text-center font-semibold">Foods</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="assets/images/icons/courthouse-black.svg" alt="" />
                    </div>
                    <p class="text-center font-semibold">Politics</p>
                </div>
            </a>
            <a href="">
                <div class="flex gap-[10px] rounded-full px-[22px] py-3 ring-1 ring-[#E8EBF4] transition-all duration-300 hover:ring-2 hover:ring-maga-orange">
                    <div class="h-6 w-6 shrink-0 overflow-hidden">
                        <img class="h-full w-full object-contain" src="assets/images/icons/cup-black.svg" alt="" />
                    </div>
                    <p class="text-center font-semibold">Sport</p>
                </div>
            </a>
        </nav>

        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        @vite(['resources/js/swiper.js'])
    </body>
</html>
