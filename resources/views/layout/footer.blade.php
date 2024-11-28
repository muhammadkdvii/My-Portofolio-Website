<footer class="py-6 shadow-md ">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
      
      <!-- Logo -->
      <div class="flex items-center space-x-3">
        <div class="bg-green-500 text-white rounded-full h-10 w-10 flex items-center justify-center text-lg font-bold">
          K
        </div>
        <span class="font-semibold text-xl text-white">KDVII</span>
      </div>

      <!-- Copyright -->
      <div class="mt-4 md:mt-0 text-gray-400">
        &copy; <span id="year"></span> KDVII. Dibuat dengan pnuh cinta❤️.
      </div>
      
    </div>
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>