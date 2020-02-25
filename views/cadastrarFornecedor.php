<h1>Digite os dados abaixo</h1>
<form>
    <fieldset>
        
        <legend>Dados do fornecedor</legend>
        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" required/>
        </p>
        <p>
            <label for="imagem">Imagem do fornecedor: </label>
            <input type="file" name="imagem" accept="imgage/png, image/jpeg, image/jpg" required/>
        </p>
        <p>
            <label for="descricao">Descrição: </label>
            <textarea name="descricao" required></textarea>
        </p>
        <p>
            <label for="site">Site: </label>
            <input type="url" name="site" require/> 
        </p>
        
    </fieldset>
    <button type="submit" class="btn-send">Salvar</button>
</form>