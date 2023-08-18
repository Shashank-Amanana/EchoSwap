window.addEventListener("load", function () {
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');

  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener("change", function () {
      checkboxes.forEach(function (cb) {
        if (cb !== checkbox) {
          cb.checked = false;
        }
      });
    });
  });
});
