@if(\Auth::check())

<nav class="navbar navbar-default navbar-fixed-top navbar-less">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/dashboard')}}">
        <img src="{{asset('img/logo.png')}}" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" style="width: 18px;height: 18px;"
                    src="{{url(Auth::user()->photo)}}" alt="">{{Auth::user()->first_name}}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/profile')}}">Profile</a></li>
            <li><a href="{{url('/logout')}}">Log Out</a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  @else
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" alt=""></a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav cng">

         <li class="@if($uril=='') active @endif"><a href="{{url('/')}}">জাতীয় <span class="sr-only">(current)</span></a></li>
        <li class="@if($uril=='politics') active @endif"><a href="{{url('/politics')}}">রাজনীতি</a></li>
        <li class="@if($uril=='sports') active @endif"><a href="{{url('/sports')}}">খেলা</a></li>
        <li class="@if($uril=='economics') active @endif"><a href="{{url('/economics')}}">অথনীতি</a></li>
        <li class="@if($uril=='international') active @endif"><a href="{{url('/international')}}">আন্তজাতিক</a></li>
        <li class="@if($uril=='editors') active @endif"><a href="{{url('/editors')}}">সম্পাদকীয়</a></li>
        <li class="@if($uril=='entertainment') active @endif"><a href="{{url('/entertainment')}}">বিনোদন</a></li>
        <li class="@if($uril=='educations') active @endif"><a href="{{url('/educations')}}">শিক্ষাঙ্গন</a></li>
        <li class="@if($uril=='features') active @endif"><a href="{{url('/features')}}">ফিচার</a></li>
        <li class="@if($uril=='others') active @endif"><a href="{{url('/others')}}">অন্যান্য</a></li>
        <li class="@if($uril=='mail') active @endif"><a href="{{url('/mail')}}">যোগাযোগ</a></li>

      </ul>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      {{--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}

        {{--<ul class="nav navbar-nav navbar-right">--}}
           {{--<li class="dropdown">--}}
            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action<span class="caret"></span></a>--}}
            {{--<ul class="dropdown-menu">--}}
              {{--<li class="@if($uril=='signup') active @endif"><a href="{{url('/signup')}}">Sign Up</a></li>--}}

              {{--<li class="@if($uril=='login') active @endif"><a href="{{url('/login')}}">Log In</a></li>--}}
            {{--</ul>--}}
          {{--</li>--}}
        {{--</ul>--}}




      {{--</div><!-- /.navbar-collapse -->--}}
    </div><!-- /.container-fluid -->
  </nav>
@endif
