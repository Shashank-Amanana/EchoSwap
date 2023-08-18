const scriptURL =
  "https://script.google.com/macros/s/AKfycbwJsfFOT5zpgM_bAVKj4pZgi08vFPb28v6tsyLdGsIaWwRprGN0xBabx3X5Z6WftifD/exec";
const form = document.forms["Suggestion"];

form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) =>
      alert("Thank you! your form is submitted successfully.")
    )
    .then(() => {
      window.location.reload();
    })
    .catch((error) => console.error("Error!", error.message));
});
