<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" class="theme-dark" lang="en" >

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - vControl</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/tailwind.output.css" />
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <script src="../assets/js/init-alpine.js"></script>
</head>

<body>
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-24 md:h-auto md:w-20 px-3 ">
            <img aria-hidden="true" class="object-cover w-10"
              src="{{ asset('assets/img/logoviva.svg') }}" alt="Office" />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-500 dark:text-gray-200">
                vControl | Login
              </h1>
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Usuario</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="Jane Doe" id="usuario" name="username" required autofocus />
              </label>
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  placeholder="***************" type="password" name="password" id="password" required />
              </label>
              <br>
              <button type="submit"
                class=" block w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Acceder
              </button>
              <div class="mt-4">
                @if ($errors->any())
                @include('asset.alerts.errors')
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</body>

</html>
