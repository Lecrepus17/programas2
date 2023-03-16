<form method="post">
    <table>
        <tr>
            <td><input type="text" name="1" value="<?php echo $tabuleiro[0]; ?>" disabled></td>
            <td><input type="text" name="2" value="<?php echo $tabuleiro[1]; ?>" disabled></td>
            <td><input type="text" name="3" value="<?php echo $tabuleiro[2]; ?>" disabled></td>
        </tr>
        <tr>
            <td><input type="text" name="4" value="<?php echo $tabuleiro[3]; ?>" disabled></td>
            <td><input type="text" name="5" value="<?php echo $tabuleiro[4]; ?>" disabled></td>
            <td><input type="text" name="6" value="<?php echo $tabuleiro[5]; ?>" disabled></td>
        </tr>
        <tr>
            <td><input type="text" name="7" value="<?php echo $tabuleiro[6]; ?>" disabled></td>
            <td><input type="text" name="8" value="<?php echo $tabuleiro[7]; ?>" disabled></td>
            <td><input type="text" name="9" value="<?php echo $tabuleiro[8]; ?>" disabled></td>
        </tr>
    </table>
    <button type="submit" name="reset">Reiniciar</button>
</form>
<?php
$tabuleiro = array("", "", "", "", "", "", "", "", "");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["reset"])) {
        $tabuleiro = array("", "", "", "", "", "", "", "", "");
    } else {
        $posicao = $_POST["posicao"];
        $jogador = $_POST["jogador"];
        $tabuleiro[$posicao - 1] = $jogador;
    }
}
function verificarVencedor($tabuleiro) {
    for ($i = 0; $i < 3; $i++) {
        $linha = $i * 3;
        if ($tabuleiro[$linha] != "" && $tabuleiro[$linha] == $tabuleiro[$linha + 1] && $tabuleiro[$linha] == $tabuleiro[$linha + 2]) {
            return $tabuleiro[$linha];
        }
        if ($tabuleiro[$i] != "" && $tabuleiro[$i] == $tabuleiro[$i + 3] && $tabuleiro[$i] == $tabuleiro[$i + 6]) {
            return $tabuleiro[$i];
        }
    }
    if ($tabuleiro[0] != "" && $tabuleiro[0] == $tabuleiro[4] && $tabuleiro[0] == $tabuleiro[8]) {
        return $tabuleiro[0];
    }
    if ($tabuleiro[2] != "" && $tabuleiro[2] == $tabuleiro[4] && $tabuleiro[2] == $tabuleiro[6]) {
        return $tabuleiro[2];
    }
    foreach ($tabuleiro as $casa) {
        if ($casa == "") {
            return false;
        }
    }
    return "empate";
}
$vencedor = verificarVencedor($tabuleiro);
if ($vencedor !== false) {
    if ($vencedor == "empate") {
        echo "Jogo terminou empatado!";
    } else {
        echo "O jogador ".$vencedor." venceu!";
    }
}
?>

<form method="post">
    <table>
        <tr>
            <td><input type="text" name="1" value="<?php echo $tabuleiro[0]; ?>" disabled></td>
            <td><input type="text" name="2" value="<?php echo $tabuleiro[1]; ?>" disabled></td>
            <td><input type="text" name="3" value="<?php echo $tabuleiro[2]; ?>" disabled></td>
        </tr>
        <tr>
            <td><input type="text" name="4" value="<?php echo $tabuleiro[3]; ?>" disabled></td>
            <td><input type="text" name="5" value="<?php echo $tabuleiro[4]; ?>" disabled></td>
            <td><input type="text" name="6" value="<?php echo $tabuleiro[5]; ?>" disabled></td>
        </tr>
        <tr>
            <td><input type="text" name="7" value="<?php echo $tabuleiro[6]; ?>" disabled></td>
            <td><input type="text" name="8" value="<?php echo $tabuleiro[7]; ?>" disabled></td>
            <td><input type="text" name="9" value="<?php echo $tabuleiro[8]; ?>" disabled></td>
        </tr>
    </table>
    <?php
        if (!$vencedor) {
            echo '<p>Jogador '.($jogador == 'X' ? 'O' : 'X').', é a sua vez de jogar!</p>';
            echo '<p>Informe a posição onde deseja jogar:</p>';
            echo '<input type="text" name="posicao">';
            echo '<button type="submit">Jogar</button>';
        }
    ?>
</form>
