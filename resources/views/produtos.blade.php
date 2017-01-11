<!DOCTYPE html>
<html>
    <head>
        <title>Produtos</title>
     </head>       
     <body>

     <h1>Produtos</h1>  
     <ul>
    
        
            <li>

             <?php foreach($produtos as $produto):?>
                <li>
                    
                    {{$produto->nome}}
                    </br>
                    {{$produto->descricao}}

                </li>
             <?php endforeach;?>   
                </br>


                  

            
           
     </ul>

    </body>
</html>
