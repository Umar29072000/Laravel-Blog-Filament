<div>
    <!-- Require css -->
    <style>
        .scroll-hidden::-webkit-scrollbar {
            height: 0px;
            background: transparent;
            /* make scrollbar transparent */
        }
    </style>

    <nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-800">
        <div class="container px-6 py-3 mx-auto">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <a href="#">
                            <svg class="w-12 h-12" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>Group</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs>
                                        <linearGradient x1="62.1023273%" y1="0%" x2="108.19718%" y2="37.8635764%"
                                            id="linearGradient-1">
                                            <stop stop-color="#4285EB" offset="0%"> </stop>
                                            <stop stop-color="#2EC7FF" offset="100%"> </stop>
                                        </linearGradient>
                                        <linearGradient x1="69.644116%" y1="0%" x2="54.0428975%" y2="108.456714%"
                                            id="linearGradient-2">
                                            <stop stop-color="#29CDFF" offset="0%"> </stop>
                                            <stop stop-color="#148EFF" offset="37.8600687%"> </stop>
                                            <stop stop-color="#0A60FF" offset="100%"> </stop>
                                        </linearGradient>
                                        <linearGradient x1="69.6908165%" y1="-12.9743587%" x2="16.7228981%"
                                            y2="117.391248%" id="linearGradient-3">
                                            <stop stop-color="#FA816E" offset="0%"> </stop>
                                            <stop stop-color="#F74A5C" offset="41.472606%"> </stop>
                                            <stop stop-color="#F51D2C" offset="100%"> </stop>
                                        </linearGradient>
                                        <linearGradient x1="68.1279872%" y1="-35.6905737%" x2="30.4400914%"
                                            y2="114.942679%" id="linearGradient-4">
                                            <stop stop-color="#FA8E7D" offset="0%"> </stop>
                                            <stop stop-color="#F74A5C" offset="51.2635191%"> </stop>
                                            <stop stop-color="#F51D2C" offset="100%"> </stop>
                                        </linearGradient>
                                    </defs>
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g fill-rule="nonzero">
                                            <path
                                                d="M116.850078,4.54548777 L4.52892893,116.774275 C-1.50964298,122.807881 -1.50964298,132.553174 4.52892893,138.586781 L116.850078,250.815568 C122.88865,256.849175 132.641964,256.849175 138.680536,250.815568 L185.77519,203.759641 C191.183172,198.356106 191.183172,189.595245 185.77519,184.191711 C180.367208,178.788175 171.599136,178.788175 166.191154,184.191711 L130.489075,219.864432 C128.986084,221.366187 126.704989,221.366187 125.201998,219.864432 L35.5055378,130.241729 C34.0025469,128.739974 34.0025469,126.460755 35.5055378,124.959 L125.201998,35.3362976 C126.704989,33.8345425 128.986084,33.8345425 130.489075,35.3362976 L166.191154,71.009019 C171.599136,76.4125539 180.367208,76.4125539 185.77519,71.009019 C191.183172,65.605484 191.183172,56.8446228 185.77519,51.4410879 L138.685727,4.39028013 C132.622361,-1.51275655 122.86548,-1.46496803 116.850078,4.54548777 Z"
                                                fill="url(#linearGradient-1)"> </path>
                                            <path
                                                d="M116.850078,4.54548777 L4.52892893,116.774275 C-1.50964298,122.807881 -1.50964298,132.553174 4.52892893,138.586781 L116.850078,250.815568 C122.88865,256.849175 132.641964,256.849175 138.680536,250.815568 L185.77519,203.759641 C191.183172,198.356106 191.183172,189.595245 185.77519,184.191711 C180.367208,178.788175 171.599136,178.788175 166.191154,184.191711 L130.489075,219.864432 C128.986084,221.366187 126.704989,221.366187 125.201998,219.864432 L35.5055378,130.241729 C34.0025469,128.739974 34.0025469,126.460755 35.5055378,124.959 L125.201998,35.3362976 C128.944397,32.1100005 135.050525,25.5752137 144.017405,24.0468431 C150.68143,22.9109853 157.967021,25.4109881 165.874177,31.546852 C160.587747,26.2647619 151.52493,17.2125713 138.685727,4.39028013 C132.622361,-1.51275655 122.86548,-1.46496803 116.850078,4.54548777 Z"
                                                fill="url(#linearGradient-2)"> </path>
                                            <path
                                                d="M196.646643,173.754365 C202.054625,179.157899 210.822696,179.157899 216.230677,173.754365 L250.970004,139.043604 C257.008576,133.009998 257.008576,123.264704 250.970711,117.231801 L215.928547,82.342615 C210.507763,76.945494 201.736908,76.953277 196.325725,82.3600099 C190.917743,87.7635449 190.917743,96.524406 196.325725,101.927941 L219.993396,125.57615 C221.496387,127.077905 221.496387,129.357124 219.993396,130.858879 L196.646643,154.186433 C191.23866,159.589968 191.23866,168.350829 196.646643,173.754365 Z"
                                                fill="url(#linearGradient-3)"> </path>
                                            <ellipse fill="url(#linearGradient-4)" cx="128.326913" cy="128.241672"
                                                rx="30.3267102" ry="30.3017724"> </ellipse>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>

                        <!-- Search input on desktop screen -->
                        <div class="hidden mx-10 md:block">
                            <form class="relative" action="/posts">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>

                                <input type="text" name="search"
                                    class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                                    placeholder="Search">
                            </form>
                        </div>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button"
                            class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>

                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                    class="absolute inset-x-0 z-20 w-full px-6 py-2 transition-all duration-300 ease-in-out bg-white top-24 dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                    <div class="flex flex-col md:flex-row md:mx-1">
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="#">Home</a>
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="#">Blog</a>
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="#">Compoents</a>
                        <a class="my-2 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:mx-4 md:my-0"
                            href="#">Courses</a>
                    </div>

                    <!-- Search input on mobile screen -->
                    <div class="my-4 md:hidden">
                        <form class="relative" action="/posts">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>

                            <input type="text" name="search"
                                class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300"
                                placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>

            <div class="py-3 mt-3 -mx-3 overflow-y-auto whitespace-nowrap scroll-hidden">
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">News</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Articles</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Videos</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Tricks</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">PHP</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Laravel</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Vue</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">React</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Tailwindcss</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Meraki UI</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">CPP</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">JavaScript</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Ruby</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Mysql</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Pest</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">PHPUnit</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Netlify</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">VS Code</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">PHPStorm</a>
                <a class="mx-4 text-sm leading-5 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 hover:underline md:my-0"
                    href="#">Sublime</a>
            </div>
        </div>
    </nav>
</div>
