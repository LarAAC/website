<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="{!! $theme->get('keywords') !!}">
        <meta name="description" content="{!! $theme->get('description') !!}">
        <title>My OTServ - powered by LaraAAC</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link href="{{ $asset->url('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ $asset->url('css/custom.css') }}" rel="stylesheet">

        {!! $styles !!}
        {!! $scripts !!}

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            {!! $partial('navbar') !!}
          </div>
        </div>
        <div class="row">
          <div class="col-md-9 main-container">
            <div class="well">
                {!! $theme->content() !!}              
            </div>
          </div>
            {!! $partial('sidebar') !!}
        </div>

        {!! $partial('footer') !!}

        {!! $footer->scripts() !!}

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ $asset->url('js/bootstrap.min.js') }}"></script>
      </body>
      </html>
</html>