function checkForm(form, validate = false) {
    if (validate) {
        var data = form.data.value;
        var texto = form.texto.value;
        var regxData = new RegExp('(([1][0-2]|[0][0-9])-([0-2][0-9]|[3][0-1])-[1-9]([0-9]{3}))|([1-9]([0-9]{3})-([1][0-2]|[0][0-9])-([0-2][0-9]|[3][0-1]))')
        var regxTexto = new RegExp('^[a-z ]{1,5}$');
        if (data == '' || texto == '') {
            alert("Por favor preencha todos os campos.");
            return false
        }
        if (!regxData.test(data)) {
            alert('Só aceita no seguinte formato mm-dd-yyyy')
            return false
        }
        if (!regxTexto.test(texto)) {
            alert('O campo texto só aceita letras minúsculas e pode conter no máximo 144 Caracteres')
            return false
        }
    } else {
        return true
    }
}