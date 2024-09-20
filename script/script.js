'use strict';





// prevent the default right-click menu to prevent inspect
// document.addEventListener('contextmenu', function (event) {
//   event.preventDefault();
// });





// element toggle function
const elementToggleFunc = function (elem) { elem.classList.toggle("active"); }

// sidebar variables
const sidebar = document.querySelector("[item-sidebar]");
const sidebarBtn = document.querySelector("[item-sidebar-btn]");

// sidebar toggle functionality for mobile
sidebarBtn.addEventListener("click", function () { elementToggleFunc(sidebar); });





// comments variables
const commentsItem = document.querySelectorAll("[item-comments-div]");
const commentShowFloatingDiv = document.querySelector("[item-comment-show-floating-container]");
const commentShowFloatingDivCloseBtn = document.querySelector("[item-comment-show-floating-div-close-btn]");
const commentShowFloatingDivOverlay = document.querySelector("[item-comment-show-floating-div-overlay]");
// floating-div variable
const commentShowFloatingDivImg = document.querySelector("[item-comment-show-floating-div-img]");
const commentShowFloatingDivTitle = document.querySelector("[item-comment-show-floating-div-commenter-name]");
const commentFloatingDivTime = document.querySelector("[item-comment-show-floating-div-time]");
const commentShowFloatingDivText = document.querySelector("[item-comment-show-floating-div-text]");

// floating-div toggle function
const commentfShowFloatingDivFunc = function () {
  commentShowFloatingDiv.classList.toggle("active");
  commentShowFloatingDivOverlay.classList.toggle("active");
  document.body.style.overflow = "hidden";
}
// add click event to all floating-div items
for (let i = 0; i < commentsItem.length; i++) {
  commentsItem[i].addEventListener("click", function () {
    commentShowFloatingDivImg.src = this.querySelector("[item-comments-avatar]").src;
    commentShowFloatingDivImg.alt = this.querySelector("[item-comments-avatar]").alt;
    commentShowFloatingDivTitle.innerHTML = this.querySelector("[item-commenter-name]").innerHTML;
    commentFloatingDivTime.innerHTML = this.querySelector("[item-comments-time]").innerHTML;
    commentShowFloatingDivText.innerHTML = this.querySelector("[item-comments-text]").innerHTML;
    commentfShowFloatingDivFunc();
  });
}
// add click event to floating-div close button
commentShowFloatingDivCloseBtn.addEventListener("click", commentfShowFloatingDivFunc);
commentShowFloatingDivOverlay.addEventListener("click", commentfShowFloatingDivFunc);

//for closing the overflow hidden
commentShowFloatingDivCloseBtn.addEventListener("click", () => {
  document.body.style.overflow = "auto";
})
//for closing the overflow hidden
commentShowFloatingDivOverlay.addEventListener("click", () => {
  document.body.style.overflow = "auto";
})





// comment form floating div variables
const addCommentButton = document.querySelector("[item-add-comment-button]");
const commentFormFloatingContainer = document.querySelector("[item-comment-form-floating-container]");
const commentFormFloatingDivCloseBtn = document.querySelector("[item-comment-form-floating-close-btn]");
const commentFormFloatingDivOverlay = document.querySelector("[item-comment-form-floating-div-overlay]");

//for opening the comment form floating div after clicking the add comment button
addCommentButton.addEventListener("click", () => {
  commentFormFloatingContainer.classList.toggle("active");
  commentFormFloatingDivOverlay.classList.toggle("active");
  document.body.style.overflow = "hidden";
})
//for closing the comment form floating div after clicking the close button
commentFormFloatingDivCloseBtn.addEventListener("click", () => {
  commentFormFloatingContainer.classList.remove("active");
  commentFormFloatingDivOverlay.classList.remove("active");
  document.body.style.overflow = "auto";
})
//for closing the comment form floating div after clicking the underlay
commentFormFloatingDivOverlay.addEventListener("click", () => {
  commentFormFloatingContainer.classList.remove("active");
  commentFormFloatingDivOverlay.classList.remove("active");
  document.body.style.overflow = "auto";
})





// custom select project type variables for mobile and pc
const select = document.querySelector("[item-select]");
const selectItems = document.querySelectorAll("[item-select-option]");
const selectValue = document.querySelector("[item-select-value]");
const filterBtn = document.querySelectorAll("[item-filter-btn]");

select.addEventListener("click", function () { elementToggleFunc(this); });
// add event in all select items
for (let i = 0; i < selectItems.length; i++) {
  selectItems[i].addEventListener("click", function () {
    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    elementToggleFunc(select);
    filterFunc(selectedValue);
  });
}
// filter variables
const filterItems = document.querySelectorAll("[item-filter-option]");
const filterFunc = function (selectedValue) {
  for (let i = 0; i < filterItems.length; i++) {
    if (selectedValue === "all") {
      filterItems[i].classList.add("active");
    } else if (selectedValue === filterItems[i].dataset.category) {
      filterItems[i].classList.add("active");
    } else {
      filterItems[i].classList.remove("active");
    }
  }
}
// add event in all filter button items for large screen
let lastClickedBtn = filterBtn[0];
for (let i = 0; i < filterBtn.length; i++) {
  filterBtn[i].addEventListener("click", function () {
    let selectedValue = this.innerText.toLowerCase();
    selectValue.innerText = this.innerText;
    filterFunc(selectedValue);
    lastClickedBtn.classList.remove("active");
    this.classList.add("active");
    lastClickedBtn = this;
  });
}





// contact form variables to lock or unlock the submit button
const contactForm = document.querySelector("[item-contact-form]");
const contactFormInputs = document.querySelectorAll("[item-contact-form-input]");
const contactFormBtn = document.querySelector("[item-contact-form-btn]");

// add event to all contact form input field
for (let i = 0; i < contactFormInputs.length; i++) {
  contactFormInputs[i].addEventListener("input", function () {
    // check all input field in contact form have value or not
    if (contactForm.checkValidity()) {
      contactFormBtn.removeAttribute("disabled");
    } else {
      contactFormBtn.setAttribute("disabled", "");
    }
  });
}





// comment form variables to lock or unlock the submit button
const commentForm = document.querySelector("[item-comment-form]");
const commentFormInputs = document.querySelectorAll("[item-comment-form-input]");
const commentFormBtn = document.querySelector("[item-comment-form-btn]");

// add event to all comment form input field
for (let i = 0; i < commentFormInputs.length; i++) {
  commentFormInputs[i].addEventListener("input", function () {
    // check all input field in comment form have value or not
    if (commentForm.checkValidity()) {
      commentFormBtn.removeAttribute("disabled");
    } else {
      commentFormBtn.setAttribute("disabled", "");
    }
  });
}





// function to download the resume
function downloadResume() {
    // Create an anchor element
    const link = document.createElement('a');
    link.href = 'resume/Nazmus_Saif_Resume.pdf'; // Path relative to your HTML file
    link.download = 'Nazmus_Saif_Resume.pdf'; // Name for the downloaded file
    // click the link to trigger the download
    link.click();
}





// page navigation variables to switch about, resume, portfolio, blog and contact form pages
const navigationLinks = document.querySelectorAll("[item-nav-link]");
const pages = document.querySelectorAll("[data-page]");

// add event to all nav link
for (let i = 0; i < navigationLinks.length; i++) {
  navigationLinks[i].addEventListener("click", function () {
    for (let i = 0; i < pages.length; i++) {
      if (this.innerHTML.toLowerCase() === pages[i].dataset.page) {
        pages[i].classList.add("active");
        navigationLinks[i].classList.add("active");
        window.scrollTo(0, 0);
      } else {
        pages[i].classList.remove("active");
        navigationLinks[i].classList.remove("active");
      }
    }
  });
}





// the following code keep the theme changes even if the page is reloaded or we left the page and re-enter
// document.addEventListener("DOMContentLoaded", function () {
//   let themeButton = document.getElementById("theme-button");
//   let body = document.body;
//   // Check for stored theme preference
//   let isChangedTheme = localStorage.getItem("isChangedTheme") === "true";
//   // Set initial theme based on stored preference
//   if (isChangedTheme) {
//     body.classList.add("change-theme");
//   }
//   themeButton.addEventListener("click", function () {
//     // Toggle theme
//     if (body.classList.contains("change-theme")) {
//       body.classList.remove("change-theme");
//       // Update local storage
//       localStorage.setItem("isChangedTheme", "false");
//     } else {
//       body.classList.add("change-theme");
//       // Update local storage
//       localStorage.setItem("isChangedTheme", "true");
//     }
//   });
// });





document.addEventListener("DOMContentLoaded", function () {
  let themeButton = document.getElementById("theme-button");
  let body = document.body;
  
  // Generate a unique identifier for the user
  const userId = getOrCreateUserId();
  
  // Check for stored theme preference in localStorage
  let storedThemePreference = localStorage.getItem(userId);
  if (storedThemePreference) {
    body.classList.add(storedThemePreference);
  }
  
  themeButton.addEventListener("click", function () {
    // Toggle theme
    if (body.classList.contains("change-theme")) {
      body.classList.remove("change-theme");
      // Update localStorage
      localStorage.setItem(userId, "");
    } else {
      body.classList.add("change-theme");
      // Update localStorage
      localStorage.setItem(userId, "change-theme");
    }
  });
});

// Function to generate or retrieve a unique user identifier
function getOrCreateUserId() {
  let userId = localStorage.getItem("userId");
  if (!userId) {
    userId = "user_" + Math.random().toString(36).substr(2, 9);
    localStorage.setItem("userId", userId);
  }
  return userId;
}





// dynamically submit the contact form to php (jquery)
document.addEventListener('DOMContentLoaded', function () {
  let contactFormSubmit = document.getElementById("contact-form");
  let contactFormAlertMessage = document.getElementById("contact-form-alert-message");
  function submitContactForm(event) {
      event.preventDefault();
      // extract form data
      let contactFormData = new FormData(contactFormSubmit);
      let xhr = new XMLHttpRequest();
      // configure the request
      xhr.open("POST", "./handlers/sendEmail.php", true);
      xhr.onreadystatechange = function () {
          if (xhr.readyState == 4 && xhr.status == 200) {
              // clear the form inputs if needed
              contactFormSubmit.reset();
              // display the alert message
              contactFormAlertMessage.innerHTML = "<b>" + xhr.responseText + "</b>";
              // toggle the alert notification
              $('#contact-form-alert-message').toggleClass("hide show");
              // hide the alert after 3 seconds
              setTimeout(function(){
                  $('#contact-form-alert-message').toggleClass("show hide");
              }, 3000);
          }
      };
      // send the request
      xhr.send(contactFormData);
  }
  contactFormSubmit.addEventListener('submit', submitContactForm);
});





// portfolio details floating div variables
const portfolioItems = document.querySelectorAll("[portfolio-details-div]");
const portfolioDetailsFloatingContainer = document.querySelector("[item-portfolio-details-floating-container]");
const portfolioDetailsFloatingDivCloseBtn = document.querySelector("[item-portfolio-details-floating-div-close-btn]");
const portfolioDetailsFloatingDivOverlay = document.querySelector("[item-portfolio-details-floating-div-overlay]");
const portfolioDetailsFloatingDivText = document.querySelector("[item-portfolio-details-floating-div-text]");

// floating-div toggle function
const portfolioDetailsFloatingDivFunc = function () {
  portfolioDetailsFloatingContainer.classList.toggle("active");
  portfolioDetailsFloatingDivOverlay.classList.toggle("active");
  document.body.style.overflow = "hidden";
}
// add click event to all floating-div items
//portfolioItems.forEach(function (portfolioItem) { // we can use for each instead of for loop()
for (let i = 0; i < portfolioItems.length; i++) {
  portfolioItems[i].addEventListener("click", function () {
    portfolioDetailsFloatingDivText.innerHTML = this.querySelector("[item-portfolio-details-text]").innerHTML;
    portfolioDetailsFloatingDivFunc();
  });
}
// add click event to floating-div close button
portfolioDetailsFloatingDivCloseBtn.addEventListener("click", portfolioDetailsFloatingDivFunc);
portfolioDetailsFloatingDivOverlay.addEventListener("click", portfolioDetailsFloatingDivFunc);

//for closing the overflow hidden
portfolioDetailsFloatingDivCloseBtn.addEventListener("click", () => {
  document.body.style.overflow = "auto";
})
//for closing the overflow hidden
portfolioDetailsFloatingDivOverlay.addEventListener("click", () => {
  document.body.style.overflow = "auto";
})





// portfolio item add floating form variables
const addPortfolioItemButton = document.querySelector("[item-add-portfolio-item-button]");
const addPortfolioItemFormContainer = document.querySelector("[item-portfolio-item-floating-form-container]");
const addPortfolioItemFormContainerCloseBtn = document.querySelector("[item-portfolio-item-floating-form-close-btn]");
const addPortfolioItemFormContainerOverlay = document.querySelector("[item-portfolio-item-floating-form-overlay]");

//for opening the portfolio item add after clicking the add comment button
addPortfolioItemButton.addEventListener("click", () => {
  addPortfolioItemFormContainer.classList.toggle("active");
  addPortfolioItemFormContainerOverlay.classList.toggle("active");
  document.body.style.overflow = "hidden";
})
//for closing the portfolio item add after clicking the close button
addPortfolioItemFormContainerCloseBtn.addEventListener("click", () => {
  addPortfolioItemFormContainer.classList.remove("active");
  addPortfolioItemFormContainerOverlay.classList.remove("active");
  document.body.style.overflow = "auto";
})
//for closing the portfolio item add after clicking the underlay
addPortfolioItemFormContainerOverlay.addEventListener("click", () => {
  addPortfolioItemFormContainer.classList.remove("active");
  addPortfolioItemFormContainerOverlay.classList.remove("active");
  document.body.style.overflow = "auto";
})





// add portfolio item form variables to lock or unlock the submit button
const addPortfolioItemForm = document.querySelector("[item-portfolio-item-floating-form]");
const addPortfolioItemFormInputs = document.querySelectorAll("[item-portfolio-item-form-input]");
const addPortfolioItemFormBtn = document.querySelector("[item-portfolio-item-form-btn]");

// add event to all comment form input field
for (let i = 0; i < addPortfolioItemFormInputs.length; i++) {
  addPortfolioItemFormInputs[i].addEventListener("input", function () {
    // check all input field in comment form have value or not
    if (addPortfolioItemForm.checkValidity()) {
      addPortfolioItemFormBtn.removeAttribute("disabled");
    } else {
      addPortfolioItemFormBtn.setAttribute("disabled", "");
    }
  });
}