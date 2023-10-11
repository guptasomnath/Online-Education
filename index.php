<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moymath Online Academy</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons//site.webmanifest">

    <link href="css/output.css" rel="stylesheet">
    <link href="css/customstyle.css" rel="stylesheet">
</head>
<body class="overflow-y-hidden sm:overflow-y-auto relative">
       <!-- Partical background -->
       <div class="absolute -z-10 w-1/2 h-full right-0 bg-[#3C5060] sm:hidden">
        <svg class="opacity-10 w-96" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <path fill="#9EF0F0" d="M23.5,-26.4C32.1,-20.8,41.9,-14.9,47.8,-4.9C53.7,5.1,55.8,19.3,51.1,31.5C46.4,43.7,34.9,53.9,24.3,51.1C13.6,48.2,3.9,32.2,-2.6,22.9C-9,13.7,-12.2,11.3,-20.7,6.9C-29.2,2.6,-43,-3.7,-42.7,-7.9C-42.4,-12.1,-28,-14.2,-18.6,-19.7C-9.1,-25.1,-4.5,-34,1.4,-35.7C7.4,-37.4,14.9,-32,23.5,-26.4Z" transform="translate(100 100)" />
        </svg>
        <div class="h-44 w-48"></div>
       </div>

    <!-- Popup Dialog -->
    <div id = "popupDialogMainLayout" class="absolute h-screen w-full bg-[#00000040] hidden items-center justify-center">
        <div class="w-96 overflow-y-scroll bg-slate-100 rounded-xl flex flex-col items-center pt-8 sm:w-[90%]">
            <div class="w-full flex items-center justify-end">
                <svg id = "dialogCloseBtn" class="cursor-pointer text-slate-400 hover:text-slate-900 sm:mr-3" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m7 7l10 10M7 17L17 7"/></svg>
            </div>

        <!-- About Layout -->
        <div id = "aboutLayout" class="w-full h-full flex flex-col items-center">
            <div id = "moymathLogoAbout" class="h-32 w-32 bg-white rounded-full"></div>
                <h3 class="font-semibold text-lg pt-3">Moymath Online Academy</h3>
                <p class="px-8 pt-1 text-center text-sm">Mission Statement: Creating new ideas and implementing them is our major concern. Upgrading us, to support our next generation by training them to earn values, ethics, and power of enthusiasm is our key motto.</p>

                <ul class="w-full px-8 py-8">
                    <li class="flex items-center">

                        <div id = "moyImg" class="h-[50px] w-[50px] bg-slate-300 rounded-full"></div>
                        <div class="pl-4">
                            <h4 class="font-semibold">Hiranmoy gupta</h4>
                            <p class="text-sm text-gray-600">Founder of Moymath</p> 
                        </div>
                    
                    </li>
                </ul>

        </div>

        <!-- Contact Form -->
        <div id = "contactFormLayout" style="display: none">
            <p class="pb-3 font-semibold text-lg">Contact Form</p>
          <?php 
          
              echo "
                    <form action='https://script.google.com/macros/s/AKfycbxPiWWkZUO6xpFo3tMXwkFtNpfaij_dB9t_ZTZw9hRVTcD4RkECbK7-mZHG7R0KT4fM/exec' method='post' class='flex flex-col pb-8 gap-5'>
                        <input class='w-full py-2 px-3' type='text' placeholder='Enter your name' name = 'username'>
                        <input class='w-full py-2 px-3' type='text' placeholder='Enter your email *' name = 'useremail'>
                        <textarea class='w-full py-2 px-3' cols='30' rows='3' placeholder='Enter message *' name = 'usermessage'></textarea>
                        <button type='submit' class='px-3 py-2 bg-[#4c8efb] text-white hover:shadow-lg'>Send</button>
                    </form>
              ";
          
          ?>
            
        </div>


        </div>

    </div>


    <!-- Header -->
    <header class="w-full h-20 flex items-center justify-between box-border px-14 sm:px-0 sm:relative bgtab:px-5">
        <div class="flex items-center sm:pl-3">
            <svg id = "mobileMenuBtn" class="hidden text-gray-600 sm:block" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
            <svg id = "mobileMenuCloseBtn" class="hidden" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m7 7l10 10M7 17L17 7"/></svg>
            <a href="index.php"><h1 class="text-3xl font-bold cursor-pointer text-slate-700 sm:pl-4 sm:text-2xl">Moymath</h1></a>
            <!-- mobile menu -->
        </div> 
        <nav id = "navbar" class="sm:hidden sm:absolute sm:bg-white sm:w-full sm:translate-y-32 sm:px-4 sm:pb-7 sm:shadow-xl">
            <ul class="flex items-center font-semibold gap-11 sm:flex-col sm:gap-4 sm:items-start">
                <li class="text-[#d8d6d6] cursor-pointer transition-all hover:text-slate-400 sm:text-slate-800"><a href="index.php">Home</a></li>
                <li class="text-[#d8d6d6] cursor-pointer transition-all hover:text-slate-400 sm:text-slate-800"><a href="course.php">Course</a></li>
                <li id = "aboutMenuBtn" class="text-[#d8d6d6] cursor-pointer transition-all hover:text-slate-400 sm:text-slate-800">About</li>
                <li>
                    <button id = "contactBtn" class="bg-black text-white px-4 py-2 text-sm rounded-lg hover:bg-[#3e3d3d] sm:rounded-none">Contact us</button>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Section -->
    <section class="flex items-center h-[30rem] px-14 sm:h-full sm:px-7 sm:flex-wrap-reverse sm:justify-center bgtab:px-5">

        <!-- Left div -->
        <div>
            <p class="text-3xl font-body tracking-[0.1rem] text-slate-700 sm:text-2xl">Let's</p>
            <p class="text-[#713ABE] font-body text-6xl font-semibold tracking-[0.2rem] pt-3 sm:text-5xl">E-learning</p>
            <p class="font-body text-5xl text-slate-700 sm:text-4xl">at your home</p>
            <p class="w-[60%] pt-3 text-gray-500 text-base sm:w-full">Mission Statement: Creating new ideas and implementing them is our major concern. Upgrading us, to support our next generation by training them to earn values, ethics, and power of enthusiasm is our key motto.</p>
            <div class="pt-6 sm:flex sm:justify-center">
                <a href="/course.php"><button id = "applyNowBtn" class="text-sm px-8 py-[0.500rem] bg-[#1f3432] text-white rounded-lg font-semibold transition-all hover:bg-blue-500 shadow-md sm:w-full">Our Courses</button></a>
                <button id = 'readMoreBtn' class="text-sm px-8 py-[0.500rem] font-semibold border bg-[#DFF3E4] rounded-lg ml-4 text-gray-700 transition-all hover:bg-gray-500 hover:border-gray-500 hover:text-white shadow-md sm:w-full">Read More</button>
            </div>
        </div>

        <!-- Right div -->
        <div>
            <div id = "rightSideImage"></div>
        </div>

    </section>

    <!-- Footer -->
    <footer class="h-24 w-full flex items-center px-14 overflow-y-hidden sm:px-7 sm:h-20">
        <ul class="flex gap-5">
            <li>
                <a href="https://www.facebook.com/TheMoymathOnlineAcademy/events/?ref=page_internal"><svg class="cursor-pointer text-slate-800 transition-all hover:text-slate-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><g clip-path="url(#akarIconsFacebookFill0)"><path fill="currentColor" fill-rule="evenodd" d="M0 12.067C0 18.033 4.333 22.994 10 24v-8.667H7V12h3V9.333c0-3 1.933-4.666 4.667-4.666c.866 0 1.8.133 2.666.266V8H15.8c-1.467 0-1.8.733-1.8 1.667V12h3.2l-.533 3.333H14V24c5.667-1.006 10-5.966 10-11.933C24 5.43 18.6 0 12 0S0 5.43 0 12.067Z" clip-rule="evenodd"/></g><defs><clipPath id="akarIconsFacebookFill0"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></g></svg></a>
            </li>
            <li>
                <a href="https://in.linkedin.com/company/moymath-online-academy"><svg class="cursor-pointer text-slate-800 transition-all hover:text-slate-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3Zm1.102 4.297a1.195 1.195 0 1 0 0-2.39a1.195 1.195 0 0 0 0 2.39Zm1 7.516V6.234h-2v6.579h2ZM6.43 6.234h2v.881c.295-.462.943-1.084 2.148-1.084c1.438 0 2.219.953 2.219 2.766c0 .087.008.484.008.484v3.531h-2v-3.53c0-.485-.102-1.438-1.18-1.438c-1.079 0-1.17 1.198-1.195 1.982v2.986h-2V6.234Z" clip-rule="evenodd"/></svg></a>
            </li>
            <li>
                <a href="https://www.instagram.com/moymath_online_academy/?hl=en"><svg class="cursor-pointer text-slate-800 transition-all hover:text-slate-600" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 15 15"><path fill="currentColor" d="M7.5 5a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5Z"/><path fill="currentColor" fill-rule="evenodd" d="M4.5 0A4.5 4.5 0 0 0 0 4.5v6A4.5 4.5 0 0 0 4.5 15h6a4.5 4.5 0 0 0 4.5-4.5v-6A4.5 4.5 0 0 0 10.5 0h-6ZM4 7.5a3.5 3.5 0 1 1 7 0a3.5 3.5 0 0 1-7 0ZM11 4h1V3h-1v1Z" clip-rule="evenodd"/></svg></a>
            </li>
            <li>
                <a href="https://twitter.com/moymath_academy?lang=en"><svg class="cursor-pointer text-slate-800 transition-all hover:text-slate-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 14 14"><path fill="currentColor" d="M7 0c3.87 0 7 3.13 7 7s-3.13 7-7 7s-7-3.13-7-7s3.13-7 7-7ZM5.72 10.69c3.1 0 4.8-2.57 4.8-4.8v-.22c.33-.24.62-.54.84-.88c-.3.13-.63.22-.97.27c.35-.21.62-.54.74-.93c-.33.19-.69.33-1.07.41c-.31-.33-.75-.53-1.23-.53c-.93 0-1.69.76-1.69 1.69c0 .13.01.26.05.38c-1.4-.07-2.65-.74-3.48-1.76c-.14.25-.23.54-.23.85c0 .58.3 1.1.75 1.4c-.28 0-.54-.08-.76-.21v.02c0 .82.58 1.5 1.35 1.66c-.14.04-.29.06-.44.06c-.11 0-.21-.01-.32-.03c.21.67.84 1.16 1.57 1.17c-.58.45-1.31.72-2.1.72c-.14 0-.27 0-.4-.02c.74.48 1.63.76 2.58.76" class="cls-1"/></svg></a>
            </li>
            <li>
                <a href="https://youtube.com/@moyacademy?si=VW4ZHU-Fq0lLJzeg"><svg class="cursor-pointer text-slate-800 transition-all hover:text-slate-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><path fill="currentColor" d="M10 2.3C.172 2.3 0 3.174 0 10s.172 7.7 10 7.7s10-.874 10-7.7s-.172-7.7-10-7.7zm3.205 8.034l-4.49 2.096c-.393.182-.715-.022-.715-.456V8.026c0-.433.322-.638.715-.456l4.49 2.096c.393.184.393.484 0 .668z"/></svg></a>
            </li>
        </ul>
    </footer>

<script src="js/index.js"></script>
</body>
</html>