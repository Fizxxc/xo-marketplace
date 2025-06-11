<?php // Unsur PHP minimal agar dikenali oleh Vercel ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="2; url=login.php">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XO Marketplace</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .fade-in {
      animation: fadeIn 1s ease-in-out forwards;
    }
    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(10px); }
      100% { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body class="bg-gradient-to-br from-purple-600 to-indigo-700 text-white flex items-center justify-center h-screen">
  <div class="text-center fade-in">
    <svg class="animate-spin mx-auto mb-4 h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
    </svg>
    <h1 class="text-2xl font-bold mb-2">Redirecting to Login...</h1>
    <p class="text-sm opacity-80">Please wait while we take you to the login page.</p>
  </div>
</body>
</html>
