const loginForm = document.getElementById('login-form');
const signUpForm = document.getElementById('signup-form');

function showSignUp() {
    loginForm.style.display = 'none';
    signUpForm.style.display = 'block';
}

function showLogin() {
    signUpForm.style.display = 'none';
    loginForm.style.display = 'block';
}
