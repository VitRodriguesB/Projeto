<?php
require_once("cabecalho.php");
?>
    <h2> Editar Produto </h2>
    
    <form method="post">
                        
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="des" class="form-label">Descrição</label>
                            <input type="text" id="des" name="des" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="valor" class="form-label">valor</label>
                            <input type="text" id="valor" name="valor" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="acao" class="form-label">Ação</label>
                            <input type="text" id="acao" name="acao" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="button" class="btn-btn-secondary"
                    onclick="history.back();">Voltar</button>
                </form>
            

<?php
  require_once("rodape.php");
