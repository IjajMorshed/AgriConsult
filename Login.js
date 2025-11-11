// Get elements
const modal = document.getElementById("loginModal");
const openBtn = document.getElementById("LogBtn");
const closeBtn = document.querySelector(".close");
const loginForm = document.getElementById("loginForm");
const signupForm = document.getElementById("signupForm");
const formTitle = document.getElementById("formTitle");

// Open modal
openBtn.addEventListener("click", () => {
  modal.style.display = "block";
});

// Close modal
closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
  loginForm.reset();   
  signupForm.reset(); 
});


// Switch to Sign Up
document.getElementById("showSignup").addEventListener("click", () => {
  loginForm.classList.remove("active");
  signupForm.classList.add("active");
  formTitle.textContent = "Sign Up";
  loginForm.reset();  
});

// Switch to Login
document.getElementById("showLogin").addEventListener("click", () => {
  signupForm.classList.remove("active");
  loginForm.classList.add("active");
  formTitle.textContent = "Login";
  signupForm.reset(); 
});

// Mock form actions
loginForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const email = document.getElementById("loginEmail").value;
  alert(`Welcome back, ${email}!`);
  modal.style.display = "none";
});

signupForm.addEventListener("submit", (e) => {
  e.preventDefault();
  const name = document.getElementById("signupName").value;
  alert(`Account created for ${name}!`);
  signupForm.reset();
  document.getElementById("showLogin").click();
});
