<footer class="sticky top-[100vh] bg-black rounded-lg shadow">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
      <span class="text-sm text-gray-500 sm:text-center">© 2024 <a href="https://flowbite.com/" class="hover:underline">DLS™</a>. Powered by Dimasik and Kolyasik.
        {{\Carbon\Carbon::now()->format('H:i')}}
      </span>
      <div class="text-sm text-gray-500 sm:text-center">
          Welcome to DLS, {{ \Illuminate\Support\Facades\Request::user() -> name }}
      </div>
    </div>
</footer>
