<!--Ref: https://www.todoespacoonline.com/w/2014/07/arquivos-xml-com-php/#:~:text=C%C3%B3digo%20PHP%20para%20criar%20XML%20completo&text=xml%20%3D%20'%3C%3F-,xml%20version%3D%221.0%22%20encoding%3D%22ISO%2D8859,link%3E'%3B%20%24xml%20.-->
<?php
include './suporte/config.php';

// Leitura dos dados do formulário:
$titulo = $_REQUEST["titulo"];
$descricao = $_REQUEST["descricao"];
$link = $_REQUEST["link"];

// Criação do cabeçalho do arquivo XML:
$meus_links = array();
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
// Iniciar estrutura de dados do XML:
$xml .= '<links>';

// Se o arquivo XML existir, carregar para memória:
if (file_exists(__DIR__ . ARQUIVOXML)) {
    $arquivo_xml = simplexml_load_file(__DIR__ . ARQUIVOXML);
    // Construir estrutura de cada item (objeto):
    foreach ($arquivo_xml->favorito as $campo) {
        $xml .= '<favorito>';
        $xml .= '<titulo>' . $campo->titulo . '</titulo>';
        $xml .= '<descricao>' . $campo->descricao . '</descricao>';
        $xml .= '<link>' . $campo->link . '</link>';
        $xml .= '</favorito>';
    }
}
// Acrescentar item que acaba de ser enviado pelo formulário:
$xml .= '<favorito>';
$xml .= '<titulo>' . $titulo . '</titulo>';
$xml .= '<descricao>' . $descricao . '</descricao>';
$xml .= '<link>' . $link . '</link>';
$xml .= '</favorito>';
// Fechar estrutura de dados do XML:
$xml .= '</links>';

// Escreve o arquivo
$fp = fopen(__DIR__ . ARQUIVOXML, 'w+');
fwrite($fp, $xml);
fclose($fp);

header('Location: index.php');
?>

