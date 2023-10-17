import axios from "axios";

const btnLogin = document.getElementById("jButtonLogin");
btnLogin.addEventListener('click', function() {
    console.log(axios)
    axios.post('users/sign_in', {
        email: document.getElementById('jEmail').value,
        password: document.getElementById('jPassword').value,
    })
})
