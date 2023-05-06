
const registerButton = document.querySelector('.register-button');
registerButton.addEventListener('click', function(event) {
  const password = document.querySelector('#password').value;
  const confirmPassword = document.querySelector('#confirm-password').value;

  if (password !== confirmPassword) {
    alert('Passwords do not match');
    event.preventDefault();
  }
});


