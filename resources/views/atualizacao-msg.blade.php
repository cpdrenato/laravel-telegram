<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Telegram & Laravel</title>

        <!-- Bootstrap core CSS -->
        {!! Html::style('css/bootstrap.min.css') !!}

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <h2 class="form-signin-heading">Respostas</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>TESTE</td>
                        </tr>
                        @foreach($msgs as $mensagens)
                            <?php echo "<pre>", print_r($msgs, 1), "</pre>";
                        die; ?>
                            <tr>
                                <td>TESTE</td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>


        </div> <!-- /container -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        {!! Html::script('/js/bootstrap.min.js') !!}
    </body>
</html>