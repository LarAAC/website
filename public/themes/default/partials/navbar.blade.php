<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Community <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Live Casts</a></li>
            <li><a href="#">Characters</a></li>
            <li><a href="#">Highscores</a></li>
            <li><a href="#">Houses</a></li>
            <li><a href="#">Guilds</a></li>
            <li><a href="#">Guild Wars</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-book"></i> Library <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Exp. stages</a></li>
            <li><a href="#">Quests</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> Shop</a></li>
        <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Forum</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-question-sign"></i> Help <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">F.A.Q.</a></li>
            <li><a href="#">Rules</a></li>
            <li><a href="#">Support</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ URL::route('account.create') }}"><i class="glyphicon glyphicon-share-alt"></i> Create Account</a></li>
        <li class="dropdown">
          <a href="{{ URL::route('account.login') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
          <div class="dropdown-menu" style="padding:17px 17px 0px 17px;">
          {!! Form::open(['method' => 'POST', 'route' => 'account.login']) !!}
            <div class="form-group form-group-sm">
                <label for="">account.name</label>
                <input type="text" class="form-control" style="width:220px;">
              </div>
              <div class="form-group form-group-sm">
                <label for="">account.password</label>
                <input type="password" class="form-control" style="width:220px;">
              </div>
              <div class="form-group form-group-sm">
                <button type="submit" class="btn btn-block btn-primary">Login</button>
                <a class="btn btn-block" href="#">Forgot password?</a>
              </div>
          {!! Form::close() !!}
          </div>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>