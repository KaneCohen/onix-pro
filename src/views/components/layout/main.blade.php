<!DOCTYPE html>
<html lang="en" data-theme="dark" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Onixpro' }}</title>
    <link href="{{ asset('vendor/Onixpro/css/app.css') }}" rel="stylesheet">
    @stack('css')
</head>

<body>


    <div class="p-4 lg:p-10">
        @if (Auth::check())
        <x-onixpro::layout.navbar />
        @endif
        <x-onixpro::layout.flash />
        {{ $slot }}
    </div>


    <script src="{{ asset('vendor/Onixpro/js/app.js') }}"></script>
    <script>
        const Toast = Swal.mixin({
            toast            : true,
            position         : 'top',
            showConfirmButton: false,
            timer            : 3000,
            timerProgressBar : true,
            didOpen          : (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            });
    </script>
    @stack('js')
</body>

</html>
