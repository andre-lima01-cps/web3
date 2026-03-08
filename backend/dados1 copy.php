<?php
declare(strict_types=1);

// ===== CORS (útil se você testar de origens diferentes) =====
// Em produção, troque "*" pelo seu domínio.
// header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Responde pré-flight (OPTIONS) quando necessário
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// ===== Resposta JSON UTF-8 =====
header('Content-Type: application/json; charset=utf-8');

$frutas = [
    "Banana",
    "Maçã",
    "Uva",
    "Manga",
    "Abacaxi",
    "Pêssego",
    "Açaí"
];

// sleep(3);

echo json_encode($frutas, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
// echo json_encode($frutas);