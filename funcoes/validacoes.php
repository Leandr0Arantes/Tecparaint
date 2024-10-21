<?php 

function validarNome($nome) {
    // Verifica se o nome não está vazio e se tem pelo menos 3 caracteres
    return !empty($nome) && strlen($nome) >= 3;
}

/*function validarCPF($cpf) {
    // Remove caracteres não numéricos
    $cpf = preg_replace('/\D/', '', $cpf);

    // Verifica se o CPF tem 11 dígitos
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se todos os dígitos são iguais (ex: 111.111.111-11)
    if (preg_match('/^(\d)\1{10}$/', $cpf)) {
        return false;
    }

    // Validação do CPF (cálculo dos dígitos verificadores)
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}*/

function validarSenha($senha) {
    // Verifica se a senha tem pelo menos 8 caracteres, 1 letra maiúscula, 1 letra minúscula e 1 número
    return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $senha);
}
?>