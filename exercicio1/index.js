desapear = () => {
    $('.testando').hide();
}
apear = () => {
    $('.testando').show();
}
cleanContent = () => {
    $('.testando').html('');
}
newContent = (newText) => {
    $('.testando').html(newText);
}

convertJsTo = (type) => {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', `convertJsTo.php?typeConvert=${type}`, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = () => {
        if (xhr.readyState == 4 && xhr.status == 200) {
            if(xhr.responseText > 0){
                alert('ARQUIVO CONVERTIDO COM SUCESSO')
                location.reload(true);
            }else{
                alert('ESSE ARQUIVO JÁ ESTAVA CONVERTIDO')
            }
        }
    };
    xhr.send();
}