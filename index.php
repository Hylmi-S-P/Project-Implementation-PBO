<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas PBO - Form Sederhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body
    class="bg-gray-50 flex justify-center items-center min-h-screen font-sans"
  >
    <div
      class="bg-white p-8 rounded-lg shadow-sm border border-gray-100 w-full max-w-2xl"
    >
      <form action="process.php" method="POST" class="space-y-4">
        <div>
          <input
            type="text"
            name="name"
            placeholder="Name"
            class="w-full border border-gray-200 rounded-md p-3 focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400"
            required
          />
        </div>

        <div>
          <input
            type="text"
            name="username"
            placeholder="Username"
            class="w-full border border-gray-200 rounded-md p-3 focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400"
            required
          />
        </div>

        <div>
          <input
            type="tel"
            name="phone"
            placeholder="Phone Number"
            class="w-full border border-gray-200 rounded-md p-3 focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400"
            required
          />
        </div>

        <div>
          <textarea
            name="address"
            placeholder="Address"
            rows="2"
            class="w-full border border-gray-200 rounded-md p-3 focus:outline-none focus:border-blue-400 focus:ring-1 focus:ring-blue-400"
            required
          ></textarea>
        </div>

        <div class="flex justify-center pt-4">
          <button
            type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-10 rounded-full transition duration-200"
          >
            Submit
          </button>
        </div>
      </form>
    </div>
  </body>
</html>
