@php
  $no = 1;
@endphp

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
          <a class="btn btn-ghost text-xl">FF DATA CHARACTER</a>
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
                <img alt="" src="/img/logo-garena.jpg" />
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
    <!-- navbar end -->

    <!-- table start -->
    <div class="overflow-x-auto">
      <table class="table">
        <!-- head -->
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Skill</th>
            <th>Jenis kelamin</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($karakter as $k)
            <tr class="hover">
              <th>{{ $no }}</th>
              <td>{{ $k ['nama'] }}</td>
              <td>{{ $k ['skill'] }}</td>
              <td>{{ $k ['jeniskelamin'] }}</td>
              <td class="flex gap-3"><a href="/{{ $k->id }}/edit" class="btn btn-outline btn-primary">Edit</a>
                <form action="/update/{{ $k->id }}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-error">Delete</button>
                </form>
              </td>
            </tr>
            @php
                $no++;
            @endphp
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="mt-5 p-2 text-center">
      <a href="/add" class="btn btn-outline btn-info">Add Character</a>
    </div>
    <!-- table end -->


    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>