<section id="cadastro">
    <h1>Cadastra-se para recebe conteúdo</h1>
    <div class="cadastro-form">
        <form action="process_form.php" method="post">
            <input type="hidden" name="type" value="cadastro">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="">
            </div>

            <div class="form-group">
                <label for="dt_nasc">Data de Nascimento</label>
                <input type="date" name="dt_nasc" id="">
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="">
            </div>

            <div class="form-group">
                <button type="submit" class="btn-cadastro">Enviar Formulario</button>
            </div>

            <div class="form-group">
            <mark>Voçe recebera e-mail sobre tudo que esta acontendo nas areas de Ciência, Tecnologia e Inovação do Brasil</mark>
            </div>
        </form>
    </div>
</section>