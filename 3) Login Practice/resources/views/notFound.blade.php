
<html>

<head>

    <title>404 Error</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
        body {
            background: #dedede;
        }

        .page-wrap {
            min-height: 100vh;
        }
    </style>

</head>

<body>
    <div class="page-wrap d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    
                    <span class="display-1 d-block">404</span>
                    <div class="mb-4 lead">The page you are looking for was not found.</div>
                    
                    <a href="{{ url('/') }}" class="btn btn-link">Back to Home</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>