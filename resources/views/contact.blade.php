<!DOCTYPE html>
<html lang="en">
  <head>
    <title>High Property - Find Your Dream Property Here</title>
    <link rel="shortcut icon" href="img/alanxcode.jpg" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="High Property is your trusted website to find local properties. We provide the best property listings for those looking for homes, apartments, or commercial properties." />
    <meta name="keywords" content="High Property, real estate, buy a house, rent an apartment, local property, commercial property, sell a house, Indonesia property" />
    <meta name="author" content="High Property" />

    <meta property="og:title" content="High Property - Find Your Dream Property" />
    <meta property="og:description" content="High Property helps you find the best properties in your local area. Easily search for homes, apartments, or commercial properties." />
    <meta property="og:url" content="https://www.highproperty.com" />
    <meta property="og:image" content="https://www.highproperty.com/images/logo.png" />

    <meta name="geo.region" content="ID" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="geo.position" content="-6.2088;106.8456" />

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <!-- Internal CSS-->
    <link rel="stylesheet" href="{{ asset('assets/css/styleku.css') }}" />
    <!-- Data AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>
  <body class="font-poppins">
    <nav class="fixed md:absolute top-0 left-0 w-full border-gray-200 bg-transparent backdrop-blur-sm border-gray-700 z-10">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('assets/img/logo.jpg') }}" class="h-8 rounded-full" alt="" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Kandangan Fresh</span>
        </a>
        <button
          data-collapse-toggle="navbar-solid-bg"
          type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-gray-200"
          aria-controls="navbar-solid-bg"
          aria-expanded="false"
        >
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
          <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent">
            <li>
              <a href="{{ url('/') }}" class="block py-2 px-3 md:p-0 rounded md:bg-transparent md:text-white md:hover:text-green-500 hover:bg-gray-100 md:hover:bg-transparent"> Home </a>
            </li>
            <li>
              <a href="{{ url('/about') }}" class="block py-2 px-3 md:p-0 text-gray-900 hover:bg-gray-100 rounded md:bg-transparent md:hover:bg-transparent md:text-white md:border-0 md:hover:text-green-500"> About </a>
            </li>
            <li>
              <a href="{{ url('/contact') }}" class="block py-2 px-3 md:p-0 text-white bg-green-500 rounded md:hover:bg-transparent md:bg-transparent md:text-green-500 md:border-0 md:hover:text-green-500"> Contact </a>
            </li>
            <li>
              <a href="{{ url('/login') }}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:text-white md:border-0 md:hover:text-green-500"> Login </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-header relative">
      <div class="absolute inset-0 bg-black/40"></div>
      <div class="relative pt-[16rem] pb-[7rem] pl-5 space-y-5 text-slate-100">
        <h1 class="text-5xl font-bold uppercase md:text-7xl">Contact</h1>
        <hr class="w-1/2 lg:w-1/3 border-2" />
      </div>
    </header>

    <main>
      <section class="px-6 py-20 space-y-8 md:px-10 lg:px-24">
        <div class="text-center space-y-4" data-aos="fade-up">
          <h1 class="text-5xl font-medium">Lokasi Kami</h1>
          <div class="flex items-center justify-center">
            <hr class="border-2 border-green-500 w-1/5" />
          </div>
        </div>

        <div class="text-center grid grid-cols-1 gap-y-6 md:grid-cols-2 md:gap-y-20 md:gap-x-6 md:items-center">
          <div data-aos="zoom-in">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d141198.5540580893!2d112.20931084268952!3d-7.702133891757577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78671f0564257f%3A0x1af9eb581848c8f8!2sKantor%20Kepala%20Desa%20Kandangan!5e0!3m2!1sid!2sid!4v1748428808803!5m2!1sid!2sid"
              class="w-full h-[30em]"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>

          <div data-aos="zoom-in">
            <form onsubmit="sendToWhatsApp(event)" id="contactForm">
              <div class="grid gap-y-4 mb-6">
                <div>
                  <label for="name" class="hidden mb-2 text-sm font-medium text-gray-900">Name</label>
                  <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="Name" required />
                </div>
                <div>
                  <label for="message" class="hidden mb-2 text-sm font-medium text-gray-900">Pesan</label>
                  <textarea id="message" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="Pesan" required></textarea>
                </div>
              </div>
              <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Send Message</button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer class="bg-zinc-900">
      <div class="mx-auto max-w-screen-xl space-y-8 px-4 pt-16 pb-7 sm:px-6 lg:space-y-16 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">
          <div>
            <div class="text-green-500 font-poppins flex items-center gap-x-4">
              <img src="{{ asset('assets/img/alanxcode.jpg') }}" alt="" class="h-20 rounded-full" />
              <h1 class="font-semibold text-3xl">High Property</h1>
            </div>
            <p class="mt-4 max-w-xs text-slate-100">Dari Ladang Kandangan, Brambang Segar ke Tangan Anda.</p>

            <ul class="mt-8 flex gap-6">
              <li>
                <a href="https://facebook.com/alanzagirekber" rel="noreferrer" target="_blank" class="text-green-500 transition hover:opacity-75">
                  <span class="sr-only">Facebook</span>

                  <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      fill-rule="evenodd"
                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>

              <li>
                <a href="https://instagram.com/alanzagi" rel="noreferrer" target="_blank" class="text-green-500 transition hover:opacity-75">
                  <span class="sr-only">Instagram</span>

                  <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      fill-rule="evenodd"
                      d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>

              <li>
                <a href=" rel="noreferrer" target="_blank" class="text-green-500 transition hover:opacity-75">
                  <span class="sr-only">Twitter</span>

                  <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                    />
                  </svg>
                </a>
              </li>

              <li>
                <a href="" rel="noreferrer" target="_blank" class="text-green-500 transition hover:opacity-75">
                  <span class="sr-only">GitHub</span>

                  <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      fill-rule="evenodd"
                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>

              <li>
                <a href="" rel="noreferrer" target="_blank" class="text-green-500 transition hover:opacity-75">
                  <span class="sr-only">Dribbble</span>

                  <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                      fill-rule="evenodd"
                      d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>

          <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-3 lg:grid-cols-4">
            <div>
              <p class="font-medium text-slate-100 text-2xl font-playfair">Page</p>

              <ul class="mt-4 space-y-1 text-md font-poppins">
                <li>
                  <a href="{{ url('/') }}" class="block py-2 px-3 transition text-green-500 hover:text-green-500"> Home </a>
                </li>
                <li>
                  <a href="{{ url('/about') }}" class="block py-2 px-3 transition text-slate-100 hover:text-green-500"> About </a>
                </li>
                <li>
                  <a href="{{ url('/contact') }}" class="block py-2 px-3 transition text-slate-100 hover:text-green-500"> Contact </a>
                </li>
                <li>
                  <a href="{{ url('/login') }}" class="block py-2 px-3 transition text-slate-100 hover:text-green-500"> Login </a>
                </li>
              </ul>
            </div>

            <div>
              <p class="font-medium text-slate-100 text-2xl font-playfair">Contact</p>

              <ul class="mt-6 space-y-4 text-md font-poppins">
                <li class="flex items-center gap-x-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 lg:h-20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="text-green-500" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" class="text-green-500" />
                  </svg>
                  <a href="https://www.google.com/search?q=Desa+Kandangan%2C+Kecamatan+Kandangan%2C+Kab.+Kediri%2C+Jawa+Timur.&ie=UTF-8" target="_blank" class="text-slate-100 transition hover:text-green-500"> Desa Kandangan, Kecamatan Kandangan, Kab. Kediri, Jawa Timur. </a>
                </li>

                <li class="flex items-center gap-x-4">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6">
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"
                      class="text-green-500"
                    />
                  </svg>

                  <a href="https://wa.me/628535467999" target="_blank" class="text-slate-100 transition hover:text-green-500"> +62 853-3546-7999 </a>
                </li>
              </ul>
            </div>

            <div class="bg-slate-100 opacity-0 p-4 rounded-lg mt-4 grid grid-cols-2 gap-4 pr-4 md:col-span-2 lg:col-span-2 lg:mt-0">
              <div class="col-span-3 space-y-6">
                <div>
                  <h2 class="text-2xl font-medium text-gray-900 font-playfair">Get the Latest Information!</h2>

                  <p class="mt-2 text-gray-500 font-poppins pr-8">Enter your email address below to subscribe to the latest information and promotions about High Property.</p>
                </div>
                <div class="col-span-2 lg:col-span-3 lg:flex lg:items-end">
                  <form class="w-full" name="submit-to-google-sheet">
                    <label for="email" class="sr-only">Email</label>

                    <div class="border border-sky-100 p-2 sm:flex sm:items-center sm:gap-4">
                      <input disabled type="email" id="email" name="email" placeholder="email@domain.com" class="w-full p-3 border-none rounded-md focus:border-transparent focus:ring-sky-400 sm:text-sm" required />

                      <button
                        type="submit"
                        id="submit"
                        class="mt-3 flex items-center justify-center w-full bg-green-500 px-6 py-3 text-sm font-bold uppercase tracking-wide text-slate-100 transition-none rounded-md hover:bg-green-900 sm:mt-0 sm:w-auto sm:shrink-0"
                      >
                        <span id="button-text">Send</span>
                        <svg id="loading-spinner" class="hidden animate-spin h-5 w-5 text-white ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                        </svg>
                      </button>
                    </div>

                    <div id="success-message" class="hidden items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                      <span class="sr-only">Info</span>
                      <div><span class="font-medium">Succeed!</span> Your email has been added to the subscription list for information about High Property.</div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <p class="text-sm text-slate-100 font-poppins">&copy; 2024. <a href="https://instagram.com/alanzagi" target="_blank" class="hover:underline hover:text-green-500">High Property</a>. All rights reserved.</p>
      </div>
    </footer>
    <!-- Flowbite -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <!-- Internal JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Data AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1000,
      });
    </script>
  </body>
</html>
