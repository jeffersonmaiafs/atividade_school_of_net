

@extends('template')

@section('posts')
            <?php
                for ($i = 1; $i <= 6; $i++) {
                    ?>    
                    <div class="blog-post">
                        <h2 class="blog-post-title"><?php echo $posts[$i]['titulo'] ?></h2>
                        <p class="blog-post-meta"><?php echo $posts[$i]['data'] ?> Autor:  <a href="#"><?php echo $posts[$i]['autor'] ?></a></p>

                        <?php echo $posts[$i]['texto'] ?>

                    </div><!-- /.blog-post -->
                <?php
            }
            ?>
@stop

@section('menu_superior')    

        @foreach($menu as $menu)
            <a class="blog-nav-item" href="http://localhost:8000/{{$menu}}">{{$menu}}</a>
        @endforeach
@stop



@section('arquivos')    
        <?php
            for ($i = 1; $i <= 6; $i++) {
                ?>  
                <li><a href="#"><?php echo $posts[$i]['data'] ?></a></li>
                <?php
            }
        ?>
@stop
