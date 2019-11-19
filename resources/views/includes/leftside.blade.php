<div class="col-md-2 col-xs-12">
    <div class="container">
        <div class="mt-3" style=""> 
            <h5 class="text-center">Último número <!--<small>Job Title</small>--></h5>
            
            <a href="{{ URL::to('revista/ultimonumero/' . $value->id) }}" class="text-right">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/52/Tipos_de_azules.png" 
                     class="img-thumbnail text-center" alt="Cinque Terre" width="304" height="236"> 
                
            </a>
<!--            <p class="text-justify">What does this team member to? Keep it short! This is also a great spot for social links!</p>-->
<!--            <button type="button" class="btn btn-default btn-block">Learn More</button>-->
        </div>
        <div class="mt-2" style=""> 
            <h5 class="text-center">Análisis + Visto <!--<small>Job Title</small>--></h5>
            
            <a href="{{ URL::to('popular/analisis/' . $value->id) }}" class="text-right">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/52/Tipos_de_azules.png" 
                     class="img-thumbnail text-center" alt="Cinque Terre" width="304" height="236"> 
            </a>
        </div>
        <div class="mt-2" style=""> 
            <h5 class="text-center">Preview + Visto <!--<small>Job Title</small>--></h5>
            
            <a href="{{ URL::to('popular/preview/' . $value->id) }}" class="text-right">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/52/Tipos_de_azules.png" 
                     class="img-thumbnail text-center" alt="Cinque Terre" width="304" height="236"> 
            </a>
        </div>
        <div class="mt-2" style=""> 
            <h5 class="text-center">Artíc. Destacados <!--<small>Job Title</small>--></h5>
            
            <a href="{{ URL::to('popular/articulos/' . $value->id) }}" class="text-right">
                <h6 class="text-center">articulo 1 <!--<small>Job Title</small>--></h6>
            </a>
            <a href="{{ URL::to('popular/articulos/' . $value->id) }}" class="text-right">
                <h6 class="text-center">articulo 2 <!--<small>Job Title</small>--></h6>
            </a>
            <a href="{{ URL::to('popular/articulos/' . $value->id) }}" class="text-right">
                <h6 class="text-center">articulo 3 <!--<small>Job Title</small>--></h6>
            </a>
            <a href="{{ URL::to('popular/articulos/' . $value->id) }}" class="text-right">
                <h6 class="text-center">articulo 4 <!--<small>Job Title</small>--></h6>
            </a>
            <a href="{{ URL::to('popular/articulos/' . $value->id) }}" class="text-right">
                <h6 class="text-center">articulo 5 <!--<small>Job Title</small>--></h6>
            </a>
            <a href="{{ URL::to('popular/articulos/' . $value->id) }}" class="text-right">
                <h6 class="text-center">articulo 6 <!--<small>Job Title</small>--></h6>
            </a>
        </div>
    </div>
</div>