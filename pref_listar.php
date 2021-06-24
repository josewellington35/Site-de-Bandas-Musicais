<!-- Ref: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_table_zebra -->
<?php
include './pref_novo.php';
// Faz o load do arquivo XML e retorna um objeto
if (!file_exists(__DIR__ . ARQUIVOXML)) {
    echo "Você ainda não tem preferências registradas! <br>";
    echo __DIR__ .  ARQUIVOXML ."<HR>";
} else {
    ?>
    <table>
        <tr>
            <th>Titulo </th>
            <th>Descrição </th>
            <th>Link</th>
        </tr>

        <?php
        $arquivo_xml = simplexml_load_file(__DIR__ . ARQUIVOXML);

        // Loop para ler o objeto
        foreach ($arquivo_xml->favorito as $campo) {
            ?>
            <tr>
                <td><?php echo $campo->titulo ?> </td>
                <td><?php echo $campo->descricao ?> </td>
                <td><a target="_blank" href="<?php echo $campo->link ?>">Visitar
                        <?php echo $campo->titulo ?>
                    </a> </td>
            </tr>
            <?php
        }
        ?>

    </table>
<?php } ?>