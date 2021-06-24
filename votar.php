<?php
if ((isset($_COOKIE["voto"]))) {
    echo "Você votou em: " . $_COOKIE["voto"];
} else {
    ?>
<form method="post" action="votar_resp.php" >
        Escolha o estilo:<br/><br/>

        <input type="radio" id="forro" name="musica" value="forro" />
        <label for="forro">Forró</label><br />

        <input type="radio" id="lambada" name="musica" value="lambada" />
        <label for="lambada">Lambada</label><br />

        <input type="radio" id="pagode" name="musica" value="Pagode" />
        <label for="pagode">Pagode</label><br />

        <input type="radio" name="musica" value="rock"  />
        <label>Rock</label><br />

        <input type="radio" name="musica" value="sertanejo" />
        <label>Sertanejo</label><br />

        <input type="radio" name="musica" value="samba" />
        <label>Samba</label><br />

        <input type="submit" value="Votar"/>
    </form>
<?php } ?>