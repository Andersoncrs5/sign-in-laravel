<!doctype html>
<html lang="en">
    <head>
        <title>Home</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <style>
            body {
                background-color: black;
            }
            .mt-length {
                margin-top: 17%;
            }
            .btn-default {
                background-color: transparent;
                color: white;
                border: 2px white solid;
            }
        </style>

    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="w-50 p-3 py-5 text-center mx-auto border border-2 rounded-2 mt-length" >
                <div class="text-center" >
                    <a href="{{ route('login') }}" class="btn btn-default " >login</a>
                    <a href="{{ route('register') }}" class="btn btn-default " >register</a>
                </div>
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        @if (session('msg'))
            <script>
                alert("{{ session('msg') }}");
                console.log(`Alerta: ${session('msg')}`)
            </script>
        @endif
        @if (session('error'))
            <script>
                alert("{{ session('error') }}");
                console.log(`Alerta: ${session('error')}`)
            </script>
        @endif
        @if (session('warning'))
            <script>
                alert("{{ session('error') }}");
                console.log(`Alerta: ${session('error')}`)
            </script>
        @endif

    </body>
</html>
