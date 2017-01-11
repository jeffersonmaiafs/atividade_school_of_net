<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Blog de Jefferson</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('bootstrap337/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="{{asset('estilos_site/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('estilos_site/css/blog.css')}}" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="{{asset('estilos_site/js/ie-emulation-modes-warning.js')}}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                  
                    <div class="menu_superior">
                        
                        @yield('menu_superior')
                        
                    </div> <!--fIM DO MENU_SUP-->    
                        
                    
                  
                </nav>
            </div>
        </div>

        <div class="container">

            <div class="blog-header">
                <h1 class="blog-title">O Blog do Jefferson</h1>
                <p class="lead blog-description">O site oficial de notícias da cidade de Feira de Santana.</p>
            </div>

            <div class="row">

                <div class="col-sm-8 blog-main">
                   
                    <div class="posts">
                        
                        @yield('posts')
                        
                    </div> <!--fIM DO POSTS-->
                    
                    
                    <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

                </div><!-- /.blog-main -->

                <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                    <div class="sidebar-module sidebar-module-inset">
                        <h4>Sobre</h4>
                        <p>Este blog nasceu para informar a população de Feira de Santana sobre todos os acontecimentos totalmente atualizados.</p>
                    </div>
                    <div class="sidebar-module">
                        <h4>Arquivos</h4>
                        <ol class="list-unstyled">
                                    <div class="arquivos">
                                        @yield('arquivos')
                                    </div> <!--fIM DO arquivos-->
                        </ol>
                    </div>
                    <div class="sidebar-module">
                        <h4>Elsewhere</h4>
                        <ol class="list-unstyled">
                            <li><a href="#">GitHub</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Facebook</a></li>
                        </ol>
                    </div>
                </div><!-- /.blog-sidebar -->

            </div><!-- /.row -->

        </div><!-- /.container -->

        <footer class="blog-footer">
            <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{asset('estilos_site/js/jquery.min.js')}}"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="{{asset('estilos_site/js/bootstrap.min.js')}}"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="{{asset('estilos_site/js/ie10-viewport-bug-workaround.js')}}"></script>
    </body>
</html>
