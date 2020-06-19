desapear = () => {
    document.querySelector('.testando').style.display = 'none';
}
apear = () => {
    document.querySelector('.testando').style.display = 'block';
}
cleanContent = () => {
    document.querySelector('.testando').innerHTML = '';
}
newContent = (newText) => {
    document.querySelector('.testando').innerHTML = newText;
}
remove = () => {
    document.querySelector('.testando').remove();
}


soParaTestar = () => {
    document.getElementById('testando').style.display = 'none';
    document.getElementById('testando').style.display = 'block';
    document.getElementById('testando').innerHTML = '';
    document.getElementById('testando').innerHTML = newText;
    document.getElementById('testando').remove();
}


