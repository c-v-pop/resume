<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
</head>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1ce7f964f6.js" crossorigin="anonymous"></script>
    <script src="/demo/index.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ciprian Pop's Portfolio</title>
</head>

<body class="bg-white">
  <section class="bg-card shadow-md rounded-lg p-6">
    <div class="container mx-auto text-center">
      <div x-data="{ open: false }" class="flex flex-col md:flex-row md:items-center md:justify-between">
        <div class="flex items-center justify-between lg:justify-start">
          <div class="w-20 h-20 rounded-full bg-support-200 p-1 m-1 hover:bg-primary transition duration-300 shadow-lg">
            <a href="#nav">
              <img src="./images/avatar.PNG" alt="avatar" class="rounded-full bg-main-bg border-4 border-primary shadow-md">
            </a>
          </div>
          <button class="rounded-lg focus:outline-none md:hidden" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="size-8 text-primary">
              <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="hidden grow flex-col md:flex md:flex-row md:justify-end">
          <ul class="list-none space-y-2 lg:inline-flex lg:items-center lg:space-y-0">
            <li>
              <a href="#projects" class="border-b-2 border-transparent px-4 py-3 text-sm font-medium text-gray-700 transition duration-300 hover:border-primary hover:text-primary md:px-5 lg:px-6">
                Projects
              </a>
            </li>
            <li>
              <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail" class="border-b-2 border-transparent px-4 py-3 text-sm font-medium text-gray-700 transition duration-300 hover:border-primary hover:text-primary md:px-5 lg:px-6">
                Email me!
              </a>
            </li>
            <li>
              <a href="media/C_V_Pop.pdf" class="border-b-2 border-transparent px-4 py-3 text-sm font-medium text-gray-700 transition duration-300 hover:border-primary hover:text-primary md:px-5 lg:px-6">
                Download My CV
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
      <section class="py-32">
        <div class="container mx-auto text-center">
          <div
          class="inline-flex items-center rounded-full border px-2.5 py-0.5 transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground mb-4 max-w-full text-sm font-normal lg:mb-10 lg:py-2 lg:pl-2 lg:pr-5">
          <span class="mr-2 flex size-8 shrink-0 items-center justify-center rounded-full bg-zinc-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-smile size-4">
              <circle cx="12" cy="12" r="10"></circle>
              <path d="M8 15s1.5 2 4 2 4-2 4-2"></path>
              <path d="M9 9h.01"></path>
              <path d="M15 9h.01"></path>
            </svg>
          </span>
          <p class="truncate whitespace-nowrap">
            Hello there! I'm Ciprian Pop, and I'm a Web developer
          </p>
        </div>        
          <h1 class="mb-6 text-4xl font-bold leading-none tracking-tighter text-center md:text-[7vw] lg:text-6xl">
            Crafting Code, Fixing Bugs, Drinking Coffee ☕
          </h1>
          <p class="max-w-2xl text-zinc-600 md:text-[2vw] lg:text-xl m-auto">
            Professional web developer with a passion for creating user-friendly and visually appealing websites. With expertise in HTML, CSS, JavaScript, and various web development frameworks, I bring a wealth of technical skills to every project. 
            My goal is to design and develop websites that meet the unique needs of each client and enhance their online presence.
          </p>
        </div>
      </section>
      <section class="py-32">
        <div class="container max-w-7xl mx-auto text-center">
          <div class="flex items-center justify-between text-sm">
            <div class="flex items-center gap-1 text-zinc-600">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-square-dashed-mouse-pointer size-5">
                <path d="M5 3a2 2 0 0 0-2 2"></path>
                <path d="M19 3a2 2 0 0 1 2 2"></path>
                <path d="m12 12 4 10 1.7-4.3L22 16Z"></path>
                <path d="M5 21a2 2 0 0 1-2-2"></path>
                <path d="M9 3h1"></path>
                <path d="M9 21h2"></path>
                <path d="M14 3h1"></path>
                <path d="M3 9v1"></path>
                <path d="M21 9v2"></path>
                <path d="M3 14v1"></path>
              </svg>
              <p>Previous Projects</p>
            </div>
            <a href="#" class="hover:text-gray-800 hover:underline">Learn more<svg xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right ml-2 inline-block size-4">
                <path d="m9 18 6-6-6-6"></path>
              </svg></a>
          </div>
          <div data-orientation="horizontal" role="none" class="shrink-0 bg-border h-[1px] w-full mb-8 mt-3"></div>
          <div class="flex flex-col justify-between gap-6 md:flex-row">
            <h2 class="text-3xl font-medium md:w-1/2">What you can do with our utilities?</h2>
            <p class="md:w-1/2">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae praesent, ad ullam quis
              cupiditate atque maxime alias eaque repellendus perferendis, nemo repudiandae.
            </p>
          </div>
          <div class="mt-11 grid w-full grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3" id="projects">
            <!-- Project Card Template -->
            <div class="group rounded-lg border bg-white dark:bg-neutral-900 text-gray-800 dark:text-white shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <img src="{{ asset('images/alexia.webp') }}" alt="Alexia Salon" class="aspect-video w-full object-cover rounded-t-lg transition-transform duration-300 group-hover:scale-110" />
              <div class="p-5">
                <p class="mb-1 text-lg font-semibold text-blue-600 dark:text-blue-400">LA'Alexia Beauty Salon</p>
                <p class="text-gray-700 dark:text-gray-300">
                  Designed and developed a <span class="font-semibold text-blue-500 dark:text-blue-300">full-featured beauty salon website</span>, integrating 
                  <span class="font-semibold">Booksy</span> for seamless appointment booking. Built with 
                  <span class="font-semibold text-purple-600 dark:text-purple-400">Laravel</span>, 
                  <span class="font-semibold text-teal-600 dark:text-teal-400">TailwindCSS</span>, and 
                  <span class="font-semibold text-yellow-600 dark:text-yellow-400">JavaScript</span>.  
                  <span class="block mt-2 text-sm text-gray-600 dark:text-gray-400">Deployed with <span class="font-semibold">Ploi.io</span>, hosted on <span class="font-semibold">GoDaddy</span>.</span>
                </p>
              </div>
            </div>
          
            <div class="group rounded-lg border bg-white dark:bg-neutral-900 text-gray-800 dark:text-white shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <img src="{{ asset('images/reservia.webp') }}" alt="Reservia" class="aspect-video w-full object-cover rounded-t-lg transition-transform duration-300 group-hover:scale-110" />
              <div class="p-5">
                <p class="mb-1 text-lg font-semibold text-green-600 dark:text-green-400">Reservia</p>
                <p class="text-gray-700 dark:text-gray-300">
                  A <span class="font-semibold text-green-500 dark:text-green-300">fully responsive website</span> ensuring an optimal viewing experience across devices.
                  Designed with a <span class="font-semibold">mobile-first approach</span>, allowing users to seamlessly navigate and interact anytime, anywhere.
                </p>
              </div>
            </div>
          
            <div class="group rounded-lg border bg-white dark:bg-neutral-900 text-gray-800 dark:text-white shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <img src="{{ asset('images/dolist.jpg') }}" alt="To-Do List" class="aspect-video w-full object-cover rounded-t-lg transition-transform duration-300 group-hover:scale-110" />
              <div class="p-5">
                <p class="mb-1 text-lg font-semibold text-purple-600 dark:text-purple-400">To-Do List</p>
                <p class="text-gray-700 dark:text-gray-300">
                  Built using <span class="font-semibold text-purple-500 dark:text-purple-300">Laravel</span> with 
                  <span class="font-semibold">MySQL</span> as the database and <span class="font-semibold text-teal-500 dark:text-teal-300">TailwindCSS</span> for styling, delivering a seamless task management experience.
                </p>
              </div>
            </div>
          
            <div class="group rounded-lg border bg-white dark:bg-neutral-900 text-gray-800 dark:text-white shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <img src="{{ asset('images/ohmyfoodwebp.webp') }}" alt="OhMyFood" class="aspect-video w-full object-cover rounded-t-lg transition-transform duration-300 group-hover:scale-110" />
              <div class="p-5">
                <p class="mb-1 text-lg font-semibold text-red-600 dark:text-red-400">OhMyFood</p>
                <p class="text-gray-700 dark:text-gray-300">
                  Developed a <span class="font-semibold text-red-500 dark:text-red-300">100% mobile-friendly</span> website for a food startup,
                  listing gourmet restaurant menus with an innovative pre-order system to minimize wait times.
                </p>
              </div>
            </div>
          
            <div class="group rounded-lg border bg-white dark:bg-neutral-900 text-gray-800 dark:text-white shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <img src="{{ asset('images/seo.jpg') }}" alt="GoMike SEO" class="aspect-video w-full object-cover rounded-t-lg transition-transform duration-300 group-hover:scale-110" />
              <div class="p-5">
                <p class="mb-1 text-lg font-semibold text-yellow-600 dark:text-yellow-400">GoMike Designs - SEO Optimization</p>
                <p class="text-gray-700 dark:text-gray-300">
                  Optimized <span class="font-semibold text-yellow-500 dark:text-yellow-300">SEO strategies</span> for a freelance web designer in Atlanta, improving meta tags, keyword placement, and site performance to enhance search rankings.
                </p>
              </div>
            </div>
          
            <div class="group rounded-lg border bg-white dark:bg-neutral-900 text-gray-800 dark:text-white shadow-md transition-transform duration-300 hover:scale-105 hover:shadow-lg">
              <img src="{{ asset('images/groupomania.jpg') }}" alt="Groupomania" class="aspect-video w-full object-cover rounded-t-lg transition-transform duration-300 group-hover:scale-110" />
              <div class="p-5">
                <p class="mb-1 text-lg font-semibold text-indigo-600 dark:text-indigo-400">Groupomania Fullstack App</p>
                <p class="text-gray-700 dark:text-gray-300">
                  Developed a <span class="font-semibold text-indigo-500 dark:text-indigo-300">full-stack social media platform</span> using 
                  <span class="font-semibold">ReactJS</span> (frontend), <span class="font-semibold">NodeJS & ExpressJS</span> (backend), and <span class="font-semibold">MySQL</span> (database).
                  Implemented secure authentication and media uploads.
                </p>
              </div>
            </div>
          </div>
          
      </section>
      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">Tailblocks</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"> <?php echo date('Y'); ?>
            <a href="https://www.linkedin.com/in/ciprian-pop-9a5169157/" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@Ciprian</a>
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-3 text-gray-500">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                <circle cx="4" cy="4" r="2" stroke="none"></circle>
              </svg>
            </a>
          </span>
        </div>
      </footer>
</body>
</html>
