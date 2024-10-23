<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Layout</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-900 via-purple-800 to-purple-700 min-h-screen flex flex-col items-center">

  <!-- Navbar centered at the top -->
  <nav class="w-full py-6 flex justify-center bg-transparent absolute top-0">
    <ul class="flex space-x-10 text-white text-lg">
      <li><a href="#" class="hover:underline">Home</a></li>
      <li><a href="#" class="hover:underline">About</a></li>
      <li><a href="#" class="hover:underline">Achievements</a></li>
      <li><a href="#" class="hover:underline">Contact</a></li>
    </ul>
  </nav>

  <!-- Profile Section -->
  <div class="flex-grow flex flex-col justify-center items-center text-white">
    <div class="inline-block rounded-full overflow-hidden border-4 border-white mb-6">
      <img src="your-image-url-here.jpg" alt="Profile Picture" class="w-32 h-32 object-cover">
    </div>
    <h1 class="text-3xl font-semibold">Farell Sevendra Ferdiatama</h1>
    <p class="text-lg">Pelajar</p>
  </div>

</body>
</html>
