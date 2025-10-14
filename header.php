<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script rel = "stylesheet" src = "global.css"></script>

    <title>Title</title>
</head>
<body>
<!-- Bottom margin, padding, drop shadow, grey bg lvl -->
<header class="mb-2 px-6 shadow-2xl bg-gray-900">
    <!-- position, margin, flexbox, max width, flex column, padding, small:flex-row, small: center items, small:justify between (equal spacing) -->
    <div class="relative mx-auto flex max-w-screen-lg flex-col py-4 sm:flex-row sm:items-center sm:justify-between">
        <a class="flex items-center text-2xl font-black" href="/">
      <span class="mr-2 text-3xl text-blue-600">
          <img src = "branding_and_logos/narwhal_gaming_dk.png" alt = "logo" width = "40">
          </span>
            <!-- Used some invisible characters, might fix this later with proper spacing -->
            <span class = "text-white">‎ ‎ Narwhal Gaming</span>
        </a>
        <!-- Hidden checkbox for toggleable opening burger menu-->
        <input class="peer hidden" type="checkbox" id="navbar-open" />
        <!-- Absolute position, margin top, cursor style pointer, text size, small screen hidden, for nav open -->
        <label class="absolute right-0 mt-1 cursor-pointer text-xl sm:hidden" for="navbar-open">
            <span class="sr-only">Toggle Navigation</span>
            <svg class xmlns="http://www.w3.org/2000/svg" width="0.88em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 448 512"><path fill="currentColor" d="M0 96c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32h384c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zm448 160c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h384c17.7 0 32 14.3 32 32z" /></svg>
        </label>
        <nav aria-label="Header Navigation" class="peer-checked:block hidden pl-2 py-6 sm:block sm:py-0">
            <ul class="flex flex-col gap-y-4 sm:flex-row sm:gap-x-8">
                <li class=""><a class="text-white hover:text-blue-600" href="#">Store</a></li>
                <li class=""><a class="text-white hover:text-blue-600" href="#">Wishlist</a></li>
                <li class=""><a class="text-white hover:text-blue-600" href="#">Library</a></li>
                <li class="mt-2 sm:mt-0"><a class="rounded-xl border-2 border-blue-600 px-6 py-2 font-medium text-blue-600 hover:bg-blue-600 hover:text-white" href="#">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>