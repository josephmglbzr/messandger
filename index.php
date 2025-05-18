<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Messenger Clone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen">
  <!-- Navbar -->
  <nav class="w-full flex items-center justify-between px-8 py-4 border-b bg-white">
    <div class="flex items-center space-x-2">
      <img src="https://scontent-mnl3-1.xx.fbcdn.net/v/t39.8562-6/475210330_598195142840489_9172482348551739153_n.png?_nc_cat=1&ccb=1-7&_nc_sid=f537c7&_nc_ohc=rYgFl3X1WBcQ7kNvwHjCuVm&_nc_oc=AdmDt3BYQ-GG5w4IsH8ZoQ-dHJqcxeXzmSuUrnXECHr6Dz1c3jR5dRUDQkk13vPjVps&_nc_zt=14&_nc_ht=scontent-mnl3-1.xx&_nc_gid=WUx2f14CHSa9Xd5g23tBgQ&oh=00_AfKVwEIZTY7MEujejgO_NCtN_mgOV1ZdZBzyLd9rzP8MPg&oe=682F8658" alt="Messenger Logo" class="w-8 h-8">
    </div>
    <ul class="flex items-center space-x-8 text-black font-medium text-sm">
      <li class="hover:underline cursor-pointer">Features<span class="ml-1">&#9662;</span></li>
      <li class="hover:underline cursor-pointer">Privacy and Safety</li>
      <li class="hover:underline cursor-pointer">Desktop App</li>
      <li class="hover:underline cursor-pointer">For Developers</li>
      <li class="hover:underline cursor-pointer">Help Center</li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div class="flex flex-col md:flex-row items-center justify-center w-full max-w-7xl mx-auto mt-8 md:mt-0 min-h-[80vh]">
    <!-- Left: Text and Form -->
    <div class="flex-1 flex flex-col justify-center px-8 md:px-0 md:pl-16">
      <h1 class="text-5xl md:text-6xl font-bold text-[#006AFF] leading-tight mb-6" style="font-family: 'Segoe UI', Arial, sans-serif;">A place for<br>meaningful<br>conversations</h1>
      <p class="text-gray-600 text-lg mb-8 max-w-md">Messenger helps you connect with your Facebook friends and family, build your community, and deepen your interests.</p>
      <form id="loginForm" method="post" class="space-y-3 max-w-sm">
        <input type="text" id="email" name="email" placeholder="Email or phone number" class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        <input type="password" id="password" name="password" placeholder="Password" class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        <div class="flex items-center space-x-4 mt-2">
          <button type="submit" class="bg-[#006AFF] text-white px-8 py-2 rounded-full font-semibold hover:bg-blue-700 transition">Log in</button>
          <a href="#" class="text-[#006AFF] text-sm hover:underline">Forgotten your password?</a>
        </div>
      </form>
      <div class="mt-4 flex items-center">
        <input type="checkbox" id="keepSignedIn" class="mr-2">
        <label for="keepSignedIn" class="text-gray-600 text-sm">Keep me signed in</label>
      </div>
    </div>
    <!-- Right: Mockup Image -->
    <div class="flex-1 flex items-center justify-center relative w-full h-full mt-12 md:mt-0">
      <img src="https://scontent-mnl3-1.xx.fbcdn.net/v/t39.8562-6/474824309_3871144839821587_2071916119066981578_n.png?_nc_cat=1&ccb=1-7&_nc_sid=f537c7&_nc_ohc=d54O6Aw1St0Q7kNvwGisHgd&_nc_oc=AdniuvO_arRkWuTuaW7Qea0_jeGJBSuPZBI7xJEix2rDg_8xxodoOi4tzRHPxMHcuXU&_nc_zt=14&_nc_ht=scontent-mnl3-1.xx&_nc_gid=W744s8ppANUlK2yZTT69MA&oh=00_AfK1jzhUqhidXAbLERtxdRBliTH2c-AoyVlySY6oaXAcLg&oe=682FA38A" alt="Messenger Mockup" class="w-[350px] md:w-[400px] rounded-xl shadow-2xl">
    </div>
  </div>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      alert(`Form Submitted`);
    });
  </script>
</body>
</html> 