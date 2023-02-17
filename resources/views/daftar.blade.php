<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body style="background-image: url(img/img-background.png); background-size: cover">


    <!-- Section: Design Block -->
    <div class="content vh-100 d-flex justify-content-center align-items-center">
        <div class="">
            <style>
                .cascading-right {
                    margin-right: -50px;
                }

                @media (max-width: 991.98px) {
                    .cascading-right {
                        margin-right: 0;
                    }
                }
            </style>

            <!-- Jumbotron -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="card cascading-right"
                            style="background: hsla(0, 0%, 100%, 0.40);backdrop-filter: blur(10px);">
                            <div class="card-body shadow-5 text-center">
                                <h2 class="fw-bold pt-3 mb-3">DAFTAR</h2>
                                <form class="p-5" action="/daftar" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" name="name" id="name" placeholder="Username"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="email" id="email" placeholder="Email"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            class="form-control">
                                    </div>

                                    <div class="mb-5 mt-5">
                                        <button class="btn btn-primary px-5" type="submit">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <img src="img/login.jpg"
                            class="w-100 rounded-4 shadow-4" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Section: Design Block -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
