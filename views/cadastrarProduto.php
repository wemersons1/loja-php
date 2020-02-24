    
        <h1>Preencha os campos abaixo</h1>
        <form>
            
            <fieldset>
            <legend>Dados do produto</legend>
            <p>    
                    <label for="nome">Nome do Produto:</label> 
                    <input type="text" name="nome" required/>
                </p>
                <p>
                    <label for="preco">Preço: </label>
                    <input type="number" step="0.01" name="preco" required/>
                </p>
                <p>
                    <label for="imagem">Imagem do produto</label>
                    <input type="file" name="imagem" accept="image/png, image/jpeg, image/jpg" required>
                </p>
                <p>
                    <label for="descricao">Descrição: </label>
                    <textarea name="descricao" required></textarea>
                </p>
            </fieldset>
            <button name="Enviar">Salvar</button>


        </form>