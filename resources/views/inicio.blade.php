

@extends('template')

@section('menu_superior')    

       
        @foreach($menu as $menu)
            <a class="blog-nav-item" href="http://localhost:8000/{{$menu}}">{{$menu}}</a>
        @endforeach
@stop


@section('posts')

    <h1>O melhor portal de notícias do Nordeste.</h1>

<p>
    <br>Feira de Santana é um município brasileiro do Estado da Bahia situado a 108 quilômetros de sua capital, Salvador, a qual se liga através da BR-324. Feira, como comumente é apelidada, é a segunda cidade mais populosa do estado e maior cidade do interior nordestino em população, ou seja, é a maior cidade do interior das regiões Norte, Nordeste, Centro Oeste e Sul do Brasil, e é também a sexta maior cidade do interior do país, e com uma população maior que oito capitais estaduais.[9] Na Hierarquia urbana do Brasil, Feira de Santana é uma capital regional B e sede da maior região metropolitana do interior nordestino.
    
    </br>
    <br>
    Feira de Santana é uma cidade consolidada no vale do Rio Jacuípe, na borda ocidental do Recôncavo, a oeste dos planaltos semiáridos. O distrito do centro de Feira de Santana está localizado imediatamente a leste da confluência dos planaltos acidentados com o Rio Jacuípe e as planícies que se limitam com a zona da mata a leste, a cerca de 45 km de distancia do Oceano Atlântico. O meridiano 39° oeste de Greenwich passa através da região central da cidade.
</p></br>

   
@stop


