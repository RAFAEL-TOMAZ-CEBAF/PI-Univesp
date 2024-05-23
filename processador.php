<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações de conexão ao banco de dados
    $servername = "heroku_0227988c715370b";
    $username = "bb9a81b19dca7f";
    $password = "8741434b";
    $dbname = "dados_pacientes";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara os dados para inserção no banco de dados
    $nome_completo = $_POST['nome'] ?? '';
    $data_nascimento = $_POST['data_nascimento'] ?? '';
    $sexo = $_POST['sexo'] ?? '';
    $gestante = $_POST['gestante'] ?? '';
    $raca_cor = $_POST['raça'] ?? '';
    $escolaridade = $_POST['escolaridade'] ?? '';
    $nome_mae = $_POST['nome_mae'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $logradouro = $_POST['logradouro'] ?? '';
    $numero = $_POST['numero'] ?? 0; // Converte para inteiro
    $bairro = $_POST['bairro'] ?? '';
    $febre = $_POST['febre'] ?? '';
    $artralgia = $_POST['artralgia'] ?? '';
    $cefaleia = $_POST['cefaleia'] ?? '';
    $mialgia = $_POST['mialgia'] ?? '';
    $exantema = $_POST['exantema'] ?? '';
    $prurido = $_POST['prurido'] ?? '';
    $conjuntivite = $_POST['conjuntivite'] ?? '';
    $dor_olhos = $_POST['dor_olhos'] ?? '';

    // inserção de dados
    $sql = "INSERT INTO pacientes (nome_completo, data_nascimento, sexo, gestante, raca_cor, escolaridade, nome_mae, cidade, logradouro, numero, bairro, febre, artralgia, cefaleia, mialgia, exantema, prurido, conjuntivite, dor_olhos)
            VALUES ('$nome_completo', '$data_nascimento', '$sexo', '$gestante', '$raca_cor', '$escolaridade', '$nome_mae', '$cidade', '$logradouro', $numero, '$bairro', '$febre', '$artralgia', '$cefaleia', '$mialgia', '$exantema', '$prurido', '$conjuntivite', '$dor_olhos')";

    // Executa a instrução SQL
    if ($conn->query($sql) === TRUE) {
        echo "Registro adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar registro: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    echo "Erro: O formulário não foi submetido corretamente.";
}
?>
