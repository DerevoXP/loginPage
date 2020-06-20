function test() {
    console.log('test - ok');
}

function submitToRegistrationFunction() {

    if (document.getElementById('login').value && document.getElementById('password').value === document.getElementById('confirmPassword').value && document.getElementById('password').value && document.getElementById('email').value) {

        let login = document.getElementById('login').value;
        let password = document.getElementById('password').value;
        let email = document.getElementById('email').value;

        let xhr = new XMLHttpRequest();
        xhr.open("GET", '/data/engine/setNewUser.php?login=' + login + "&password=" + password + "&email=" + email);

        xhr.onload = function () {
            let result = xhr.responseText;
            if (String(result) == "ok") {
                document.getElementById('indicator').innerText = "Регистрация прошла успешно!";
                setTimeout(() => { window.location.href = '../login.php' }, 2000);
            } else {
                document.getElementById('indicator').innerText = result;
            }
        }
        xhr.send();
    } else {
        document.getElementById('indicator').innerText = "Введите корректные данные!"
    }
}

function loginFunction() {

    if (document.getElementById('login').value && document.getElementById('password').value) {

        let login = document.getElementById('login').value;
        let password = document.getElementById('password').value;

        let xhr = new XMLHttpRequest();
        xhr.open("GET", '/data/engine/login.php?login=' + login + "&password=" + password);
        xhr.onload = function () {
            let result = xhr.responseText;
            if (String(result) == "ok") {
                document.getElementById('indicator').innerText = "Вход выполнен. Сейчас вам откроют, ждите.";
                setTimeout(() => { window.location.href = '../' }, 1000);
            } else {
                document.getElementById('indicator').innerText = result;
            }
        }
        xhr.send();
    } else {
        document.getElementById('indicator').innerText = "Все поля должны быть заполнены!"
    }
}

function logout() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", '/data/engine/logout.php');
    xhr.onload = function () {
        setTimeout(() => { window.location.href = '../login.php' }, 1000);
    }
    xhr.send();
}

function remindPass() {

    if (document.getElementById('email').value) {

        let email = document.getElementById('email').value;

        let xhr = new XMLHttpRequest();
        xhr.open("GET", '/data/engine/remindPass.php?email=' + email);
        xhr.onload = function () {
            let result = xhr.responseText;
            if (String(result) == "ok") {
                document.getElementById('indicator').innerText = "Проверьте свою почту. Мы отправили вам инструкции по восстановлению доступа.";
            } else {
                document.getElementById('indicator').innerText = result;
            }
        }
        xhr.send();
    } else {
        document.getElementById('indicator').innerText = "Введите email!"
    }
}

function resetPassword() {

    if (document.getElementById('password').value === document.getElementById('confirmPassword').value && document.getElementById('password').value) {

        let email = document.getElementById('email').value;
        let pass = document.getElementById('password').value;

        let xhr = new XMLHttpRequest();
        xhr.open("GET", '/data/engine/resetPassScript.php?email=' + email + "&password=" + pass);
        xhr.onload = function () {
            let result = xhr.responseText;
            if (String(result) == "ok") {
                document.getElementById('indicator').innerText = "Пароль изменён. Пожалуйста, залогиньтесь с новым паролем!";
                setTimeout(() => { window.location.href = '../login.php' }, 3000);
            } else {
                document.getElementById('indicator').innerText = result;
            }
        }
        xhr.send();
    } else {
        document.getElementById('indicator').innerText = "Введите новый пароль!"
    }
}


let p1;
let p2;

document.getElementById('password').addEventListener("input", function(){
    p1 = this.value;
    passMatch();
})

document.getElementById('confirmPassword').addEventListener("input", function(){
    p2 = this.value;
    passMatch();

})

function passMatch() { 
    if (p1 == p2 && p1 && p2) {
        document.getElementById('passMatch').innerText = "Ок!";
    } else if (!p1 || !p2) {
        document.getElementById('passMatch').innerText = "";
    } else {
        document.getElementById('passMatch').innerText = "Пароли должны совпадать!";
    }
}