const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

const btn = document.getElementById("btn");
sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});

// // Check if the "Remember me" checkbox is checked
// if (document.getElementById('rememberMeCheckbox').checked) {
//     // Get the email and password values from local storage if they exist
//     const email = localStorage.getItem('email');
//     const password = localStorage.getItem('password');
  
//     // If the email and password values exist, populate the input fields
//     if (email && password) {
//       document.getElementById('emailForm').value = email;
//       document.getElementById('passwordForm').value = password;
//     }
//   }
  
//   // Add an event listener to the "Remember me" checkbox to update local storage when it's checked or unchecked
//   document.getElementById('rememberMeCheckbox').addEventListener('change', function() {
//     if (this.checked) {
//       // Save the email and password values to local storage
//       localStorage.setItem('email', document.getElementById('emailForm').value);
//       localStorage.setItem('password', document.getElementById('passwordForm').value);
//     } else {
//       // Remove the email and password values from local storage
//       localStorage.removeItem('email');
//       localStorage.removeItem('password');
  
//       // Clear the email and password fields
//       document.getElementById('emailForm').value = '';
//       document.getElementById('passwordForm').value = '';
//     }
//   });
  