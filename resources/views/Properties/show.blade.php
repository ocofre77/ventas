<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Conalgi</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />



</head>
<body>

<nav class="navbar navbar-default" style="z-index:1;height:70px;background-color:#FFF;border:0px;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="http://conalgi.com/" style="padding:0">
            <img src="/img/backgrounds/conalgi.gif" class="img-responsive center-block" alt="Agency logo"
                 style="height:60px;margin:5px;" />
        </a>

        <a class="navbar-brand hidden-xs" style="font-size:150%;color:#373737;margin-top:10px;" href="https://witei.com/">
            Canalgi
        </a>
    </div>
    <div class="hidden-xs hidden-sm hidden-md">
        <ul class="nav navbar-nav">

        </ul>

        <ul class="nav navbar-nav" style="margin: 26px 0 0 5px;">
            <li><i class="glyphicon glyphicon-earphone" style="color:#373737;font-size:20px"></i></li>
        </ul>
        <ul class="nav navbar-nav">
            <p class="nav navbar-text" style="color:#373737;font-size:150%;margin-top:22px">
                +593 2 287 1839  / 099 2512 558</p>
        </ul>

    </div>


</nav>


<!-- imagen del inmueble -->
<div class="row-fluid">
    @if( $property->images->count() > 0 )
        <img
             src="{{ asset('images/galery/' . $property->images[0]->name) }}"
             class="img-responsive" style="max-height: 70vh;width: 100%;"  alt="">
    @else
        <img src="/img/backgrounds/no_pic.png"
             class="img-responsive" style="max-height: 70vh;width: 100%;"
             alt="This house has no pictures">
    @endif
</div>


<div class="container">
    <div class="row" style="position:relative;">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12" style="opacity:0.8;">
                    <div style="padding-bottom:15px;">
                        <h1 style="font-size:200%;font-weight:bold" class="text-center-sm h3">
                            {{ $property->propertyType->name }} en {{ $property->city->name  }} de {{ $property->area  }} m2
                        </h1>
                <span style="font-size:120%;">
                  {{ $property->address  }}, {{ $property->city->name  }}
                </span>
                    </div>


                    <div class="row" style="text-align: center;">
                        <!-- Local Comercial = 3-->
                        @if( $property->propertyType->id != 3 )
                        <div class="col-xs-6 col-sm-3 text-center" style="display:inline-block;">
                            <img src="/img/backgrounds/bedroom.svg" alt="Bedrooms icon" height="50">
                            <h4 class="text-center">
                                {{ $property->bedrooms  }}
                            </h4>
                        </div>
                        @endif

                        <div class="col-xs-6 col-sm-3 text-center" style="display:inline-block;">
                            <img src="/img/backgrounds/bathroom.svg" alt="Bathroom icon" height="50">
                            <h4 class="text-center">

                                {{ $property->bathrooms  }}

                            </h4>
                        </div>

                        <div class="col-xs-6 col-sm-3 text-center" style="display:inline-block;">
                            <img src="/img/backgrounds/blueprint.svg" alt="Area icon" height="50">
                            <h4 class="text-center">{{ $property->area  }}<sup>m2</sup></h4>
                        </div>
                        <div class="col-xs-6 col-sm-3 text-center" style="display:inline-block;margin:0;padding:0">
                            <img src="/img/backgrounds/money_bag.svg" style="margin-bottom:8px" alt="Cost icon" height="50">


                            <p class="text-center" style="font-size:20px">
                                <img src="/img/backgrounds/sale.svg" alt="Sale icon" height="32px">

                                {{ $property->value  }}

                            </p>

                        </div>
                    </div>

                </div> <!-- icons -->

            </div>
        </div> <!-- Data -->
    </div> <!-- row -->
</div> <!-- /.container -->


<div style="background-color:#F5F5F5; outline: 1px solid #DAD6D6;padding-bottom:80px">



    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Detalles inmueble</h3>
                <div class="well" style="background-color:#EDEFED;font-size: 18px;">
                    <p>{{ $property->notes  }}</p>
                </div>

               <h3>Características inmueble</h3>
                <div class="well">
                    <ul class="list-unstyled">
                        @foreach ($property->tags as $tag)
                        <li><i class="fa fa-check" aria-hidden="true"></i> {{ $tag->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>