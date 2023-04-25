<form action="criar-enquete.php" method="GET">
    <label for="nome-enquete" class="form-label">Qual o nome da enquete?</label>
    <input type="text" class="form-control" id="qt-opcoes" name="nome-enquete" value="Nova enquete">
    <label for="nome-enquete" class="form-label">Quais as opcoes da enquete?</label>
    <?php 
        $qtOpcoes = $_GET['qt-opcoes'];
        for ($i=0; $i < $qtOpcoes; $i++) { 
            echo "<input type='text' class='form-control' name='opcao[]' value='opcao $i'><br>";   
        }
    ?>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>