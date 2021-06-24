<!-- Ref: https://www.w3schools.com/howto/howto_css_login_form.asp -->
<!-- Ref: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_login_form_modal -->


<button onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;">Novo Favorito</button>

<div id="id01" class="modal">

    <form class="modal-content animate" action="pref_novo_incluir.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display = 'none'" 
                  class="close" title="Fechar">&times;</span>
        </div>

        <div class="container">
            <label for="titulo"><b>Titulo para o Link</b></label><br>
            <input type="text" placeholder="Ex: Linkedin AAS" 
                   name="titulo" required style="width: 80%;" ><br>

            <label for="descricao"><b>Descrição</b></label><br>
            <input type="text" placeholder="Ex: Acompanhar novidades sobre TI (inclusive LGPD)" 
                   name="descricao" required style="width: 80%;" ><br>

            <label for="link"><b>Link (copie a URL e cole aqui)</b></label><br>
            <input type="text" placeholder="Ex: https://www.linkedin.com/in/antonio-andrade-santos/" 
                   name="link" required style="width: 80%;" ><br>

            <button type="submit" style="width: 80%" >Registrar</button>
        </div>

    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>