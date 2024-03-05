<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- navbar start -->
    <div class="navbar bg-base-100 bg-neutral text-neutral-content">
        <div class="flex-1">
          <a class="btn btn-ghost text-xl">EDIT CHARACTER</a>
        </div>
        <div class="flex-none">
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow"></div>
            </div>
          </div>
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img alt="" src="/img/poto-navbar.png" />
              </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li>
                <a class="justify-between">
                  Profile
                  <span class="badge">New</span>
                </a>
              </li>
              <li><a>Settings</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- navbar start -->

    <!-- edit start -->
    <div class="max-w-md mx-auto relative overflow-hidden z-10 bg-white p-8 rounded-lg shadow-md before:w-24 before:h-24 before:absolute before:bg-purple-500 before:rounded-full before:-z-10 before:blur-2xl after:w-32 after:h-32 after:absolute after:bg-sky-400 after:rounded-full after:-z-10 after:blur-xl after:top-24 after:-right-12 mt-10">
        <h2 class="text-2xl text-sky-900 font-bold mb-6">Edit Your Character</h2>
            <form method="post" action="/update/{{ $karakter->id }}">
            @csrf
            @method('put')
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600" for="nama">
                  Name</label>
                <input class="mt-1 p-2 w-full border rounded-md" type="text" name="nama" value="{{ $karakter->nama }}"/>
              </div>
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600" for="skill">
                  Skill</label>
                <input
                  class="mt-1 p-2 w-full border rounded-md" name="skill" type="text" value="{{ $karakter->skill }}"/>
              </div>
              <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600" for="jeniskelamin">
                  Jenis kelamin</label>
                <input type="text" class="mt-1 p-2 w-full border rounded-md" name="jeniskelamin" value="{{ $karakter->jeniskelamin }}"/>
              </div>
              <div class="flex justify-end">
                <button
                  class="[background:linear-gradient(144deg,#af40ff,#5b42f3_50%,#00ddeb)] text-white px-4 py-2 font-bold rounded-md hover:opacity-80"
                  type="submit">
                  Okay
                </button>
              </div>
            </form>
          </div>
    <!-- edit start -->

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>