<!DOCTYPE html>
<html>

<head>
    <title>Laravel 10 Task List App</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @yield('styles')
    <style>
        .session {
            position: fixed;
            top: 10px;
            right: 10px;
            color: darkslategray;
            background-color: white;
            border-radius: 10px;
            padding: 4px 16px;
            box-shadow: 0px 2px 49px rgba(0, 0, 0, 0.1);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 12px;
        }

        .btn {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            background: #333;
            color: #fff;
            padding: 12px 22px;
            border-radius: 8px;
            font-weight: 600;
            transition: .3s;
        }
    </style>
    {{-- blade-formatter-disabled --}}
    <style type="text/tailwindcss">
        .btn {
            @apply bg-blue-500 text-white;
        }
    </style>
    {{-- blade-formatter-enabled --}}
    <style></style>
</head>

<body>
    <h1>@yield('title')</h1>
    @if (session()->has('success'))
         <div x-data="{flash: true}" >
        <div x-show="flash" class="session">
            <p>{{ session('success') }}</p>
            <span @click="flash = false" class="absolute top-0 right-0 bg-red-500 rounded-full text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
                </span>
        </div>
    </div>
    @endif
   
    <div>
        @yield('content')
    </div>
</body>

</html>
