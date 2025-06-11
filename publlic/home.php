<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6">
  <div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">XO Marketplace</h1>
    <button onclick="logout()" class="text-red-500 hover:underline">Logout</button>
    <a href="about.php" class="text-blue-600 hover:underline">Tentang Kami</a>
  </div>
  <div id="products" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4"></div>

  <script>
    if (!localStorage.getItem("user")) {
      window.location.href = "login.php";
    }

    const products = [
      { name: "Free Fire Diamond", price: 10000 },
      { name: "Mobile Legends Starlight", price: 75000 },
      { name: "PUBG Mobile UC", price: 50000 },
      { name: "Netflix Premium", price: 40000 },
      { name: "Spotify Premium", price: 30000 },
    ];

    const container = document.getElementById("products");
    products.forEach(p => {
      container.innerHTML += `
        <div class="bg-white p-4 rounded shadow">
          <h2 class="text-lg font-bold">${p.name}</h2>
          <p class="text-gray-600 mb-2">Rp ${p.price}</p>
          <button onclick="order('${p.name}', ${p.price})" class="bg-purple-600 text-white px-4 py-2 rounded">Beli</button>
        </div>`;
    });

    function order(name, price) {
      Swal.fire("Order", `Anda membeli ${name} seharga Rp ${price}`, "info");
      // implementasi ke Midtrans bisa ditambahkan di sini
    }

    function logout() {
      localStorage.removeItem("user");
      window.location.href = "login.php";
    }
  </script>
</body>
</html>
