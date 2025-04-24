function mascaraCPF(campo) {
    campo.value = campo.value
        .replace(/\D/g, '') // Remove caracteres não numéricos
        .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona o ponto
        .replace(/(\d{3})(\d)/, '$1.$2') // Adiciona o ponto
        .replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona o traço
}

function mascaraTelefone(campo) {
    campo.value = campo.value
        .replace(/\D/g, '') // Remove caracteres não numéricos
        .replace(/(\d{2})(\d)/, '($1) $2') // Adiciona parênteses e espaço
        .replace(/(\d)(\d{4})$/, '$1-$2') // Adiciona o traço
        .replace(/(\d{5})(\d)/, '$1-$2'); // Adiciona o traço para celular
}

function mascaraData(campo) {
    campo.value = campo.value
        .replace(/\D/g, '') // Remove caracteres não numéricos
        .replace(/(\d{2})(\d)/, '$1/$2') // Adiciona a barra
        .replace(/(\d{2})(\d{4})$/, '$1/$2'); } // Adiciona a barra para o ano

        function mascaraCEP(campo) {
            campo.value = campo.value
                .replace(/\D/g, '') // Remove caracteres não numéricos
                .replace(/(\d{5})(\d)/, '$1-$2'); // Adiciona o traço
        }

        function validarFormulario() {
            const nome = document.getElementById('nome').value;
            const cpf = document.getElementById('cpf').value;
            const telefone = document.getElementById('telefone').value;
            const dataNascimento = document.getElementById('dataNascimento').value;
            const cep = document.getElementById('cep').value;
            const email = document.getElementById('email').value;
            const mensagemErro = document.getElementById('mensagemErro');
        
            mensagemErro.innerHTML = ''; // Limpa mensagens de erro
        
            if (!nome || !cpf || !telefone || !dataNascimento || !cep || !email) {
                mensagemErro.innerHTML = 'Por favor, preencha todos os campos.';
                return false;
            }
        
            // Validação de formato de email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                mensagemErro.innerHTML = 'Por favor, insira um email válido.';
                return false;
            }
        
            return true; // O formulário é válido
        }