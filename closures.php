<?php

    function verifica_login(string $closure) {

        function getModelUsuario($closure) {
            function credencial() { 
                return ['joza','123'];
            }
            function outra() {
                return;
            }
            return $closure();
        };

        if( $_POST['usuario'] === getModelUsuario('credencial')[0]
            and
            $_POST['senha'] === getModelUsuario('credencial')[1]) {
            //...
        }

    }
