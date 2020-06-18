function checkForm(form, validate = false) {
    if (validate) {
        var date = form.date.value;
        var text = form.text.value;
        var regxDate = new RegExp('(([1][0-2]|[0][0-9])-([0-2][0-9]|[3][0-1])-[1-9]([0-9]{3}))|([1-9]([0-9]{3})-([1][0-2]|[0][0-9])-([0-2][0-9]|[3][0-1]))')
        var regxText = new RegExp('^[a-z ]{1,144}$');
        if (date == '' || text == '') {
            alert("Por favor preencha todos os campos.");
            return false
        }
        if (!regxDate.test(date)) {
            alert('Só aceita no seguinte formato mm-dd-yyyy')
            return false
        }
        if (!regxText.test(text)) {
            alert('O campo texto só aceita letras minúsculas e pode conter no máximo 144 Caracteres')
            return false
        }
    } else {
        return true
    }
}