<?php

function criar_diretorio($diretorio) {

    if (file_exists($diretorio)) {

        return "diretorio_existe";
    } else {

        if (mkdir($diretorio, 0777)) {
            return "diretorio_criado";
        } else {
            return "diretorio_nao_criado";
        }
    }
}

function upload_arquivo($origem, $destino) {


    if (move_uploaded_file($origem, $destino)) {

        return TRUE;
    } else {

        return FALSE;
    }
}

function upload_multiplos_arquivo($origem, $destino) {

    for ($k = 0; $k < count($origem['name']); $k++) {

        if (move_uploaded_file($origem['tmp_name'][$k], $destino . $origem['name'][$k])) {
            //echo "MOVEUUUUUU<br>";
        } else {
            //echo "NAOOOO MOVEU";
        }
    }
}

function listagem_arquivos($caminho) {

    $diretorio = dir($caminho);
    while (($arquivo_1 = $diretorio->read()) !== false) {

        if (strrchr($arquivo_1, '.') == '.pdf' || strrchr($arquivo_1, '.') == '.jpg') {

            if (strrchr($arquivo_1, '.') == '.jpg') {

                echo '<tr><td> <img src = "img'.DIRECTORY_SEPARATOR.'icones'.DIRECTORY_SEPARATOR.'jpg.png" width = "30" height = "30" /></td>';
            } else {

                echo '<tr><td> <img src = "img'.DIRECTORY_SEPARATOR.'icones'.DIRECTORY_SEPARATOR.'pdf.png" width = "30" height = "30" /></td>';
            }

            echo '<td>' . $arquivo_1 . '</td> <td> <a href=' . $caminho . $arquivo_1 . ' download="' . $arquivo_1 . '">' . 'Download' . '</a></td></tr>';
        }
    }

    $diretorio->close();
}

function download($arquivo) {
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream;");
    header("Content-Length:" . filesize($arquivo));
    header("Content-disposition: attachment; filename=" . $arquivo);
    header("Pragma: no-cache");
    header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Expires: 0");
    readfile($arquivo);
    flush();
}

?>
