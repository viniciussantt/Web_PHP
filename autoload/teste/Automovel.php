<?php

abstract class Automovel implements Veiculo {

    public function acelerar($velox){

        echo "O carro está em uma velocidade de " . $velox . " km/h !";

    }

    public function trocarMarcha($marcha){

        echo "O carro mudou a marcha para a " . $marcha . " !";

    }

    public function freiar($velox){

        echo "O carro freiou e está agora numa velocidade de " . $velox . " km/h !";

    }

}

?>