

@extends('template')

@section('menu_superior')    

       
        @foreach($menu as $menu)
            <a class="blog-nav-item" href="http://localhost:8000/{{$menu}}">{{$menu}}</a>
        @endforeach
@stop


@section('posts')

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124770.06892552087!2d-39.002277418535336!3d-12.243901612293755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71439dbd0766da9%3A0xed4d58d8df9d5ffe!2sFeira+de+Santana%2C+BA!5e0!3m2!1spt-BR!2sbr!4v1473009394581" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


@stop


