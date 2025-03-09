<!doctype html>
<html lang="en">
    <head>
        <title>Register</title>
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
                margin-top: 11%;
            }
            .btn-default {
                background-color: transparent;
                color: white;
                border: 2px white solid;
            }
            h1, label {
                color: white;
            }
            .w-lenth {
                width: 60%;
            }
        </style>

    </head>

    <body>
        <header class="container-fluid" >
            <div class="row p-1 border border-2  ">
                <div class="col-4 text-center">
                    <h1>Register</h1>
                </div>
                <div class="col-4">

                </div>
                <div class="col-4 text-center">
                    <a href="{{ route('index') }}" class="btn btn-default mt-2" >BACK</a>
                </div>
            </div>
        </header>
        <main>
            <div class="w-lenth mx-auto mt-length border border-2 rounded-2">
                <form action="{{ route('registering') }}" method="post">
                    @csrf
                    <div class="row m-2">
                        <div class="col-12">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="exemplo:pochita">
                        </div>
                        <div class="col-12">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="pochita@gmail.com">
                        </div>
                        <div class="col-12">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="12345678">
                        </div>
                        <div class="col-12 text-center mt-2">
                            <input type="submit" value="submit" class="btn btn-default">
                        </div>
                    </div>
                </form>                
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

        @if($errors->any())
            <div id="erro" class="alert alert-danger text-center p-1 position-fixed top-0 start-50 translate-middle-x w-100 z-index-5">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
            </div>

            <script>
                
                setTimeout(function() {
                    document.getElementById('erro').style.display = 'none';
                }, 6000);
            </script>
        @endif

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
