<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Upload Success</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <div class="alert alert-success">
                    <h4 class="alert-heading">Product Uploaded Successfully!</h4>
                    <p>You will be redirected to the market page in 3 seconds. If not, <a href="market.php">click here</a>.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- JavaScript code for redirection -->
    <script>
        setTimeout(function () {
            window.location.href = "profileView.php"; // Redirect to market.php after 3 seconds
        }, 3000); // 3000 milliseconds = 3 seconds
    </script>
</body>
</html>
