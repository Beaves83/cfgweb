<div class="col-md-2 col-xs-12">
    <div class="container">
        <div class="mt-3" style=""> 
            <h5 class="text-center">Último número <!--<small>Job Title</small>--></h5>
            <a href="{{ URL::to('contenidos/elemento/'.$ultimonumero->id) }}" class="text-right">
                <img src="{{$ultimonumero->imagen}}" 
                     class="img-thumbnail text-center" alt="Cinque Terre" width="304" height="236"> 

            </a>
<!--            <p class="text-justify">What does this team member to? Keep it short! This is also a great spot for social links!</p>-->
            <!--            <button type="button" class="btn btn-default btn-block">Learn More</button>-->
        </div>
        <div class="mt-2" style=""> 
            <h5 class="text-center">Análisis + Visto <!--<small>Job Title</small>--></h5>

            <a href="{{ URL::to('contenidos/elemento/'.$analisismasvisto->id) }}" class="text-right">
                <img src="{{$analisismasvisto->imagen}}" 
                     class="img-thumbnail text-center" alt="Cinque Terre" width="304" height="236"> 
            </a>
        </div>
        <div class="mt-2" style=""> 
            <h5 class="text-center">Preview + Visto <!--<small>Job Title</small>--></h5>

            <a href="{{ URL::to('contenidos/elemento/'.$previewmasvisto->id) }}" class="text-right">
                <img src="{{$previewmasvisto->imagen}}" 
                     class="img-thumbnail text-center" alt="Cinque Terre" width="304" height="236"> 
            </a>
        </div>
        <div class="mt-2" style=""> 
            <h5 class="text-center">Artíc. Destacados <!--<small>Job Title</small>--></h5>
            @foreach($articulosmasvistos as $item => $value)
            <a href="{{ URL::to('contenidos/elemento/'.$value->id) }}" class="text-right text-overflow">
                <h6 class="text-center cut-text">{{$value->titulo}} <!--<small>Job Title</small>--></h6>
            </a>

            <p class="text-center cut-text">{{$value->introduccion}} <!--<small>Job Title</small>--></p>
            <hr>
            @endforeach

        </div>
    </div>
</div>