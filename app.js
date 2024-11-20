

 document.getElementById("1").addEventListener('click',function(){
    window.location.href='shop.html';
});
document.getElementById("2").addEventListener('click',function(){
    window.location.href='shop.html';
});
document.getElementById("3").addEventListener('click',function(){
    window.location.href='shop.html';
});
document.getElementById("4").addEventListener('click',function(){
  window.location.href='shop.html';
});

document.getElementById("ram").addEventListener('click',function(){
    window.location.href='shop.html';
});












function handleLogin() {
    const user = getUserCredentials();
    if (user.isValid) {
        window.location.href = 'index.html'; // Redirect to the main page after successful login
    } else {
        alert('Invalid login credentials');
    }
}
