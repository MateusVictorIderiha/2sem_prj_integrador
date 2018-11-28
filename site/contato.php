<div class="container">
    
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <h1 class="titulo mt-4">Entre em contato conosco</h1>
            <h2 class="subtitulo py-2">Dúvidas, críticas ou sugestões, preencha os campos:</h2>

            <article>
                <form action="save-msg.php" method="post" class="save-form">
                    <div class="form-row">
                        <div class="col-lg-6">
                            <label for="elementoNome"><strong>Nome:</strong></label>
                            <input type="text" class="form-control" id="elementoNome" placeholder="Digite seu nome" name="nome" required>
                        </div>

                        <div class="col-lg-6">
                            <label for="elementoSobrenome"><strong>Sobrenome:</strong></label>
                            <input type="text" class="form-control" id="elementoSobrenome" placeholder="Digite seu sobrenome" name="sobreNome" required>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="email01"><strong>Email:</strong></label>
                        <input type="email" class="form-control" id="email01" placeholder="email@provedor.com.br" name="e-mail" required>

                        <label class="mt-2"><strong>O que voce deseja?</strong></label>
                        <select class="custom-select" name="objetivo">
                            <option value="">Clique para Escolher</option>
                            <option value="1">Dúvida</option>
                            <option value="2">Crítica</option>
                            <option value="3">Sugestão</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="textoArea"><strong>Digite sua mensagem:</strong></label>
                        <textarea class="form-control" id="textoArea" rows="5" name="mensagem"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checarBox">
                            <label class="form-check-label" for="checarBox">
                                <strong>Receber novidades por email?</strong>
                            </label>
                        </div>
                    </div>

                    <p class="text-center"><button type="submit" class="btn btn-danger">Enviar</button></p>
                </form>
                <div class="alert alert-success msg"></div>
            </article>
        </div>

        <div class="col-lg-6 col-md-12 d-none d-sm-block">
            <aside class="mt-4">
                <h1 class="titulo text-center">Saiba um pouco mais sobre o OriArt</h1>

                <p class="mt-3">
                    Fusce ullamcorper eros eget molestie ornare. Proin accumsan augue sed lorem facilisis, 
                    sit amet tristique lacus ultricies. Nunc efficitur laoreet erat, at elementum lorem dictum ut. 
                    Integer ultrices mattis tellus, vel rutrum magna ornare et. Sed in varius arcu, vel auctor mauris.
                    Morbi vel neque eget turpis tempus porta. Sed ullamcorper convallis dolor sed ornare. 
                    Mauris hendrerit aliquet rhoncus. Sed venenatis lacinia arcu at tincidunt. Vestibulum mollis
                    vulputate lacus id placerat. Donec feugiat eget nisl sed ornare. Cras pellentesque ligula eu 
                    sapien imperdiet euismod. Ut magna ex, congue a orci finibus, bibendum laoreet odio. Sed bibendum
                    molestie nisi, nec rhoncus dolor feugiat et. Proin accumsan augue sed lorem facilisis, 
                    sit amet tristique lacus ultricies. Nunc efficitur laoreet erat, at elementum lorem dictum ut. 
                    Integer ultrices mattis tellus, vel rutrum magna ornare et. Sed in varius arcu, vel auctor mauris.
                    Morbi vel neque eget turpis tempus porta. Sed ullamcorper convallis dolor sed ornare. 
                    Mauris hendrerit aliquet rhoncus. Sed venenatis lacinia arcu at tincidunt. Vestibulum mollis
                    vulputate lacus id placerat. Donec feugiat eget nisl sed ornare. Cras pellentesque ligula eu 
                    sapien imperdiet euismod. Ut magna ex, congue a orci finibus, bibendum laoreet odio. Sed bibendum
                    molestie nisi, nec rhoncus dolor feugiat et.
                </p>

                <h2 class="subtitulo text-center mt-4">Leia nossos termos de uso</h2>
                <p class="text-center mt-3"><a class="btn btn-danger" href="index.php?pagina=termo_uso" role="button">Visitar termos de uso</a></p>
            </aside>
        </div>
    </div>
</div>
