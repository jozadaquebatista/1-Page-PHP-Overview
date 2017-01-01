<?php

    function verify(string $u, string $p) {

        function getModelUser(string $closure) : array {
            function credentials() { 
                return ['joza','123'];
            }
            function other() {
                return;
            }
            return $closure();
        };

        if( $_POST['usuario'] === getModelUsuario('credentials')[0]
            and
            $_POST['senha'] === getModelUsuario('credentials')[1]) {
            //...
        }

    }
