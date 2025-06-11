<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
  <div class="bg-white p-6 rounded shadow w-80">
    <h2 class="text-xl font-bold mb-4">Login</h2>
    <input id="email" type="text" placeholder="Email" class="w-full p-2 mb-2 border rounded">
    <input id="password" type="password" placeholder="Password" class="w-full p-2 mb-4 border rounded">
    <button onclick="login()" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">Login</button>
    <p class="text-sm mt-2">Belum punya akun? <a href="register.php" class="text-blue-600">Daftar</a></p>
  </div>

  <script>
    function login() {
      fetch('/api/login.php', {
        method: 'POST',
        body: JSON.stringify({
          email: document.getElementById('email').value,
          password: document.getElementById('password').value
        })
      })
      .then(res => res.json())
      .then(data => {
        if (data.success) {
          Swal.fire('Berhasil Login', '', 'success').then(() => {
            localStorage.setItem("user", document.getElementById('email').value);
            window.location.href = "home.php";
          });
        } else {
          Swal.fire('Login Gagal', 'Cek email/password', 'error');
        }
      });
    }
  </script>
</body>
</html>
