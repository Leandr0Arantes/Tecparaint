function mascaraCPF(input) {
    let value = input.value.replace(/\D/g, ''); // Remove qualquer caractere que não seja número
    value = value.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona o primeiro ponto
    value = value.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona o segundo ponto
    value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona o traço antes dos últimos 2 dígitos
    input.value = value;
}