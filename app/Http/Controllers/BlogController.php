<?php

namespace App\Http\Controllers;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BlogController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {


        return view('blog');
    }

    public function menu(){
        $menu = [
            0 => 'inicio',
            1 => 'noticias',
            2 => 'como_chegar',
            
        ];
        
       // $posts = [0 => () 'teste1',1 => 'teste2',2 => 'teste3',3 => 'teste4',];
        
        //ARRAY DO POSTS
        
        $posts = array( 1 =>
                    array (
                    'titulo' => "Carro bate em carreta e se divide ao meio.",
                    'data' =>  "04/09/2016",
                    'autor' => "www.acordacidade.com.br",
                    'texto' => "O veículo bateu em um carreta e segundo informações da Polícia Rodoviária Federal (PRF), não há mais detalhes sobre as causas do acidente. O motorista do veículo, um homem de 30 anos morreu e o condutor da carreta que teve ferimentos leves foi socorrido.

.",    
                        ),
                2 =>
                    array (
                       'titulo' => "Temer: 'Com base sólida, conseguiremos aprovar questões aparentemente difíceis'",
                    'data' =>  "04/09/2016",
                    'autor' => "www.acordacidade.com.br",
                    'texto' => "O presidente Michel Temer disse hoje (4) que, com uma base sólida, o governo vai conseguir aprovar questões “aparentemente difíceis”. “Precisamos conversar permanentemente. Com o PSDB, tenho conversado com frequência”, disse o presidente da República durante entrevista coletiva na cidade de Hangzhou, na China, onde ocorre a Cúpula do G20, grupo que reúne as 20 maiores economias do mundo. “Com essa base sólida, vamos conseguir aprovar questões aparentemente difíceis”.",  
                        
                    ),
                3=>
                    array(
                        'titulo' => "Expofeira começa próximo domingo com atrações nacionais.",
                    'data' =>  "04/09/2016",
                    'autor' => "www.acordacidade.com.br",
                    'texto' => "A XLI Exposição Agropecuária de Feira de Santana começa no próximo domingo (4) no Parque João Martins da Silva com cerca 35 atrações nacionais e locais. A grade já está fechada, segundo o secretário de cultura, esporte e lazer do município, Rafael Cordeiro. Além dos artistas no palco principal, também animarão o evento grupos de forró e sanfoneiros, no chamado Caminho da Roça.

“No palco principal, teremos atrações nacionais, como Joelma Calypso, Adelmário Coelho, Cavaleiros do Forró, Alcymar Monteiro, Seu Maxixe, Arreio de Ouro, e atrações locais como Paulo Bindá, Djalma Ferreira. Joelma vai tocar na terça (6), temos a abertura dia 4, com Cavaleiros do Forró, Na quinta-feira, dia 7, Adelmário. Seu Maxixe, dia 8. Alcymar Monteiro dia 11 fechando o evento”, informou o secretário.",  
                    ),
               
                4=>
                    array(
                        'titulo' => "Conselheira da Mulher defende melhorias em estrutura da Lei Maria da Penha em Feira",
                    'data' =>  "04/09/2016",
                    'autor' => "www.acordacidade.com.br",
                    'texto' => "Foi realizada na manhã de hoje (30) uma reunião promovida pelo Conselho da Mulher de Feira de Santana para discutir os 10 anos da Lei Maria da Penha. Segundo a conselheira Ana Rita Costa, é preciso que a Defensoria Pública acompanhe de perto toda a rede e todos os equipamentos do município que trabalham com a defesa da mulher.

“A gente tem um número grande de estupros, de feminicídios, e a gente precisa ver como estão sendo investigados os casos de violência contra a mulher.",  
                    ),
                5=>
                    array(
                        'titulo' => "SMT faz ajustes no trânsito da região da trincheira da Maria Quitéria",
                    'data' =>  "04/09/2016",
                    'autor' => "www.acordacidade.com.br",
                    'texto' => "A Superintendência Municipal de Trânsito está realizando alguns ajustes visando melhorar as condições de tráfego dos veículos na região do cruzamento elevado entre as avenidas Maria Quitéria e Getúlio Vargas, após a abertura da trincheira. A primeira medida foi o fechamento de cruzamentos temporários. Já fechamos o cruzamento da rua Domingos Barbosa de Araújo com a Maria Quitéria. E estamos fechando o da rua Sabino Silva, onde existia um semáforo e já foi desativado. Esses cruzamentos foram abertos durante o período de obras. Mas com a liberação da trincheira, não se fazem mais necessários, explica o superintendente municipal de Trânsito, Francisco Júnior,"  
                    ),
               
                6=>
                    array(
                        'titulo' => "Iniciada construção de pistas de concreto nos lados das estações do BRT",
                    'data' =>  "04/09/2016",
                    'autor' => "www.acordacidade.com.br",
                    'texto' => "O piso de concreto em ambos os lados das estações de embarque e desembarque do BRT, como consta no projeto, já está sendo colocado. O serviço foi iniciado pelo equipamento localizado no final da Avenida Getúlio Vargas.

Com cerca de cem metros de comprimento e 19 centímetros de altura, o piso reforçado, segundo a secretaria de Planejamento, vai oferecer segurança nas frenagens para os ônibus que serão usados no sistema, que tem capacidade para transportar mais cem passageiros, confortavelmente..",  
                    )
    );
        
        return view('blog', ['menu'=>$menu],['posts'=>$posts]);
        
    }

}
