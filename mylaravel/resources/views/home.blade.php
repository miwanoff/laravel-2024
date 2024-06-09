<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark  text-white">
    @extends('layout')


    @section('main_content')


    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Home</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
                <a class="d-block" href="/docs/5.0/examples/pricing/">
                    <img class="img-thumbnail mb-3"
                        srcset="https://getbootstrap.com/docs/5.0/assets/img/examples/pricing.png,
                                                  https://getbootstrap.com/docs/5.0/assets/img/examples/pricing@2x.png 2x"
                        src="https://getbootstrap.com/docs/5.0/assets/img/examples/pricing.png" alt="" width="480"
                        height="300" loading="lazy">
                    <h3 class="h5 mb-1">Pricing</h3>
                </a>
                <p class="text-white">Example pricing page built with Cards and featuring a custom header and footer.
                </p>
            </div>

        </div>
    </div>
    @endsection
</body>

</html>