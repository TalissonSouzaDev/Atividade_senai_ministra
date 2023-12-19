<section id="contato">
    <h1>Contato</h1>
    <div class="contato-elements">
        <div class="contato-redes">
            <h4>Redes Sociais</h4>
            <ul>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>

        <div class="contato-form-group">
            <form action="process_form.php" method="post">
            <input type="hidden" name="type" value="contato">
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" name="nome" id="" require placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" name="telefone" id="" require placeholder="telefone">
                </div>

                <div class="form-group">
                    <label for="">E-mail</label>
                    <input type="email" name="email" id="" require placeholder="E-mail">
                </div>

                <div class="form-group">
                    <label for="">Sua Messagem</label>
                    <textarea name="messagem" maxlength="1000"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit">Enviar Messagem</button>
                </div>
            </form>

        </div>
    </div>
</section>