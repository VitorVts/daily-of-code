<?php
// Objetivo:
// Faça uma requisição GET para baixar um arquivo de imagem ou PDF usando curl.

//     Escolha um arquivo de exemplo (você pode usar um URL público como https://via.placeholder.com/150 para imagem).

//     Salve o arquivo localmente usando CURLOPT_FILE.

$curl = curl_init();

$arquivo = fopen("imagem.png","wb");

curl_setopt_array($curl,[
    CURLOPT_URL => "https://picsum.photos/200",
    CURLOPT_FILE => $arquivo,
    CURLOPT_FOLLOWLOCATION => true

]);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo "Erro : ". curl_error($curl);
    return;
}

echo "Imagem baixada menó!" . PHP_EOL;

fclose($arquivo);
curl_close($curl);