const formSections = document.querySelectorAll('.form-section');
let activeSection = 0;

function showSection(sectionIndex) {
  formSections.forEach(section => {
    section.style.display = 'none';
  });
  formSections[sectionIndex].style.display = 'block';
}

function nextSection() {
  if (activeSection < formSections.length - 1) {
    activeSection++;
    showSection(activeSection);
  }
}

function previousSection() {
  if (activeSection > 0) {
    activeSection--;
    showSection(activeSection);
  }
}

formSections[activeSection].style.display = 'block';
const nextButtons = document.querySelectorAll('.next-section-button');
const previousButtons = document.querySelectorAll('.previous-section-button');

nextButtons.forEach(button => {
  button.addEventListener('click', nextSection);
});

previousButtons.forEach(button => {
  button.addEventListener('click', previousSection);
});

const registrationForm = document.querySelector('#registration-form');

registrationForm.addEventListener('submit', function(event) {
  event.preventDefault();

  const role = document.querySelector('#role').value;

  if (role === 'student') {
    window.location.href = 'student.php';
  } else if (role === 'professor') {
    window.location.href = 'professor.php';
  } else {
    window.location.href = 'home1.php';
  }
});

const dropdownItems = document.querySelectorAll('.dropdown-item');

dropdownItems.forEach(item => {
  item.addEventListener('click', function() {
    dropdownItems.forEach(item => {
      item.classList.remove('selected');
    });
    this.classList.add('selected');
    const roleButton = document.getElementById('role-button');
    roleButton.textContent = this.textContent;
    roleButton.classList.add('selected');
  });
});