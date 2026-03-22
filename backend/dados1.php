<?php
$frutas = [
    "Banana",
    "Maçã",
    "Uva",
    "Manga",
    "Abacaxi",
    "Pêssego",
    "Açaí"
];

// Simula um atraso de 2 segundos para demonstrar o comportamento assíncrono no frontend
sleep(2);

echo json_encode($frutas);