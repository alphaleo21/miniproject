const signInFormbtn = document.getElementById('showSignIn');
const signUpFormbtn = document.getElementById('showSignUp');

const signinForm = document.getElementById('inForm');
const signupForm = document.getElementById('upForm');

const signinSection = document.getElementById('signinSection');
const signupSection = document.getElementById('signupSection');

signinSection.classList.add('hidden');
signupSection.classList.remove('hidden');

signinForm.classList.remove('hidden');
signupForm.classList.add('hidden');

signInFormbtn.addEventListener('click', () =>{
    signinForm.classList.remove('hidden');
    signupForm.classList.add('hidden');

    signupSection.classList.remove('hidden');
    signinSection.classList.add('hidden');
});

signUpFormbtn.addEventListener('click', () =>{
    signupForm.classList.remove('hidden');
    signinForm.classList.add('hidden');

    signinSection.classList.remove('hidden');
    signupSection.classList.add('hidden');
});