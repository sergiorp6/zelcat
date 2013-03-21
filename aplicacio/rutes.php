<?php

// Ruta al registre d'usuaris
Ruta::qualsevol('/', array('com' => 'index', 'usa' => 'estatic@index'));

Ruta::qualsevol('cerca', array('com' => 'cerca', 'usa' => 'cercador@index'));

Ruta::qualsevol('graus/{id}', array('com' => 'cerca', 'usa' => 'grau@detall'));

Ruta::qualsevol('test', function(){

    $universitat = BD::taula('universitats')
                        ->on_comunitatautonoma_id_i_abreviatura(1, 'UMA')
                        ->primer();

    pd($universitat);

});