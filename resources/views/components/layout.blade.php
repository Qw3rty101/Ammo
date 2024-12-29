<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ammo Coffee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://kit.fontawesome.com/413ca4399d.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="/css/app.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}


</head>

<body>

    {{ $slot }}


    {{-- footer --}}
    <footer class="bg-dark" id="footer">
        <br><br>
        <div class="container mt-4">
            <div class="row mt-4">
                <div class="col-lg-4 mt-4">
                    {{-- <p class="fs-3 text-light">
                        About
                    </p> --}}
                    <div class="text-light">
                        Berikan kritik dan masukan kalian kepada barista kami, agar secepat mungkin kami evaluasi, terima kasih.
                    </div>
                </div>
                <div class="col-lg-2 mt-4">
                    <p class="fs-3 text-light">
                        Sosial Media
                    </p>
                    <a class="btn btn-success" href="https://wa.me/628987269018?text=Halo?">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a class="btn btn-danger" href="https://www.instagram.com/ammocoffee_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
                <div class="col-lg-6 mt-4">
                    <p class="fs-3 text-light">
                        Lokasi
                    </p>

                    <p class="fs-6 text-light">
                        M8H3+4Q4, Jl. HS.Ronggo Waluyo, Puseurjaya, Telukjambe Timur, Karawang, Jawa Barat 41361
                    </p>
                </div>
            </div>
        </div>
        <br><br><br>
    </footer>
    {{-- footer-end --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
