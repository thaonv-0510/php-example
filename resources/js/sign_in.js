const axios = require("axios");

const btnLogin = document.getElementById("jButtonLogin");
btnLogin.addEventListener('click', function() {
    console.log('123')
    axios.post('users/sign_in', {
        email: document.getElementById('jEmail').value,
        password: document.getElementById('jPassword').value,
    })
})
