<?php 
$metodo = $_SERVER['REQUEST_METHOD'];
echo $metodo;

$uri = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
echo $uri;

if($metodo == "GET" && $uri == "/parque/"){
echo "ESTOU NA PAGINA PRINCIPAL!";
}
elseif($metodo == "GET" && $uri == "/parque/potão/"){
    echo "BEM VINDO AO PARQUE DE DIVERSOES!";
    }
    //imagine que as rotas são para comodos da sua casa, crie uma rota para cada comodo e uma mensagem;

    elseif($metodo == "GET" && $uri == "/parque/roda gigante/"){
         echo "VOCE ESTA NA RODA GIGANTE!";
    }
    elseif($metodo == "GET" && $uri == "/parque/carrimho bate-bate/"){
        echo "VOCE ESTA NO CARRINHO BATE BATE!";
    }
    elseif($metodo == "GET" && $uri == "/parque/carrocel/"){
        echo "VOCE ESTA NO CARROCEL!";
    }
    elseif($metodo == "GET" && $uri == "/parque/tiro ao alvo/"){
        echo "VOCE ESTA NO TIRO AO ALVO!";
    }
    elseif($metodo == "GET" && $uri == "/parque/montanha russa/"){
        echo "VOCE ESTA NA MONTANHA RUSSA!";
    }
    elseif($metodo == "GET" && $uri == "/parque/torre queda/"){
        echo "VOCE ESTA NA TORRE QUEDA!";
    }
    elseif($metodo == "GET" && $uri == "/parque/tunel assombrado/"){
        echo "VOCE ESTA NO TUNEL ASSOMBRADO!";
    }

?>