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

<body class="bg-gray-400">
    <section>
      <div class="container mx-auto text-center">
          <div x-data="{ open: false }" class="flex flex-col p-5 md:flex-row md:items-center md:justify-between">
            <div class="flex flex-row items-center justify-between lg:justify-start">
              <div class="w-20 h-20 rounded-full bg-support-200 p-1 m-1 hover:bg-primary avatar">
                <a href="#nav">
                    <img src="./images/avatar.PNG" alt="avatar" class="rounded-full bg-main-bg">
                </a>
            </div>
              <button class="rounded-lg focus:outline-none md:hidden" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="size-8">
                  <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                  <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" style="display: none"></path>
                </svg>
              </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="hidden grow flex-col md:flex md:flex-row md:justify-end">
              <ul class="list-none space-y-2 lg:inline-flex lg:items-center lg:space-y-0">
                <li>
                  <a href="#projects"
                    class="border-b-2 border-transparent px-2 py-6 text-sm leading-[22px] text-gray-500 hover:border-blue-600 hover:text-blue-500 md:px-3 lg:px-6">
                    Projects
                  </a>
                </li>
                <li>
                  <a href="mailto:ciprianvlad888@gmail.com?subject=The%20subject%20of%20the%20mail"
                    class="border-b-2 border-transparent px-2 py-6 text-sm leading-[22px] text-gray-500 hover:border-blue-600 hover:text-blue-500 md:px-3 lg:px-6">
                    Email me!
                  </a>
                </li>
                <li>
                  <a href="media/C_V_Pop.pdf"
                    class="border-b-2 border-transparent px-2 py-6 text-sm leading-[22px] text-gray-500 hover:border-blue-600 hover:text-blue-500 md:px-3 lg:px-6">
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
          <div class="mt-11 grid w-full grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3" id="projects">
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <img src="{{ asset('images/logo.webp') }}" alt="Alexia Salon"
                class="aspect-video max-w-full object-cover" />
              <div class="p-5">
                <p class="mb-1 font-medium">LA'Alexia</p>
                <p class="text-zinc-600">
                  Fully built a beauty salon website for a client, using Booksy for appointments
                  Using Laravel, TailwindCSS, JavaScript, GitHub, Devtools for SEO, hosting on GoDaddy and ploi.io for deployment
                </p>
              </div>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <img src="{{ asset('images/reservia.jpg') }}" alt="Html and CSS image" class="aspect-video w-full object-cover" />
              <div class="p-5">
                <p class="mb-1 font-medium">Reservia</p>
                <p class="text-zinc-600">
                  Reservia website is designed to provide an optimal viewing and interaction experience on any device. 
                  Whether you're using a desktop computer, tablet, or smartphone, our fully responsive website will automatically adjust to the screen size and resolution for seamless navigation and an enjoyable user experience.
                  With a focus on mobile-first design, your website visitors can access all of the features and content on the go, anytime, anywhere.
                </p>
              </div>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <img src="{{ asset('images/to-do-list.jpg') }}" alt="ToDoList Image" class="aspect-video w-full object-cover" />
              <div class="p-5">
                <p class="mb-1 font-medium">To-Do List</p>
                <p class="text-zinc-600">
                  With Laravel as the PHP framework, MySQL for the database, and Tailwind CSS for styling, I've crafted a seamless experience for managing tasks.
                </p>
              </div>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <img src="{{ asset('images/ohmyfood.jpg') }}" alt="OhMyFood Logo"
                class="aspect-video w-full object-cover" />
              <div class="p-5">
                <p class="mb-1 font-medium">OhMyFood Food Website</p>
                <p class="text-zinc-600">
                  Ohmyfood is a new startup that wants to make a name for itself in the restaurant business. 
                  The objective is to develop a 100% mobile-friendly site that lists the menus of gourmet restaurants. 
                  In addition to having a classic reservation system, customers will be able to select the dishes they want for their meal so that they are ready when they arrive. 
                  No more wait times in restaurants!
                </p>
              </div>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <img src="{{ asset('images/1-SEO.webp') }}" alt="SEO Image"
                class="aspect-video w-full object-cover" />
              <div class="p-5">
                <p class="mb-1 font-medium">GoMike Designs</p>
                <p class="text-zinc-600">
                  GoMikeDesigns is a freelance web designer who lives in Atlanta. 
                  Many local shops have outdated websites, so he approached a few and landed his first clients. 
                  But now he would like potential customers to find him when they Google for local freelance web designers to hire.
                </p>
              </div>
            </div>
            <div class="rounded-lg border bg-card text-card-foreground shadow-sm">
              <img src="{{ asset('images/Mern.png') }}" alt="Mern Logo"
                class="aspect-video w-full object-contain" />
              <div class="p-5">
                <p class="mb-1 font-medium">Groupomania Fullstack App</p>
                <p class="text-zinc-600">
                  This project is a full-stack social media application that allows users to create an account, upload photos, and comment on other users' posts. 
                  The application is built from scratch using ReactJS for the front-end, NodeJS and ExpressJS for the back-end, Multer for file uploads, 
                  Bcrypt for password encryption, jsonwebtoken for authentication, and MySQL for the database.
                </p>
              </div>
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
