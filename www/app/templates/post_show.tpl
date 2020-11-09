<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?php echo $params['post']['title'] ;?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/vendors/bootstrap/css" rel="stylesheet">
    <link href="/vendors/bootstrap/blog.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <div class="row mt-5">
            <div class="col-md-12">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <?php echo $params['post']['title'] ;?>
                        </h3>

                        <div class="mb-1 text-muted"><?php echo date('d.m.Y',strtotime($params['post']['created_at'])) ;?></div>
                        <p class="card-text mb-auto"><?php echo $params['post']['content'] ;?></p>

                    </div>
                </div>

            </div>

    </div>

</div>
</body>
</html>