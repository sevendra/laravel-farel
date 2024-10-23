<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Ensure the image covers the background */
    .bg-custom {
      background-image: url('your-background-image-url-here.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
  </style>
</head>
<body class="bg-gradient-to-r from-purple-800 via-purple-900 to-purple-800 h-screen bg-custom flex items-center justify-center">

  <!-- Login form -->
  <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
    <form action="#" method="POST">
      <div class="mb-4">
        <label for="username" class="block text-gray-700">Username:</label>
        <input type="text" id="username" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700">Password:</label>
        <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Login</button>
    </form>
  </div>

</body>
</html>
