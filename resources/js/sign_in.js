import axios from 'axios';

const btnLogin = document.getElementById("jButtonLogin");
btnLogin.addEventListener('click', function() {
    axios.post('sign_in', {
        email: document.getElementById('jEmail').value,
        password: document.getElementById('jPassword').value,
    }).then((response) => {
        if (response.status == 200) {
            location.href = '/';
        } else {
            location.reload();
        }
    })
})
