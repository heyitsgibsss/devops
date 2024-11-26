// Confirm Before Deleting a User
document.addEventListener("DOMContentLoaded", function () {
    const deleteLinks = document.querySelectorAll("a.delete");

    deleteLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
            const confirmDelete = confirm("Are you sure you want to delete this user?");
            if (!confirmDelete) {
                event.preventDefault();
            }
        });
    });
});

// Form Validation for Add/Edit Pages
function validateForm(event) {
    const name = document.querySelector("#name").value.trim();
    const dob = document.querySelector("#dob").value.trim();
    const gender = document.querySelector("#gender").value;

    if (!name || !dob || !gender) {
        alert("All fields are required!");
        event.preventDefault();
    }
}

// Attach validation to forms (Add and Edit)
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    if (form) {
        form.addEventListener("submit", validateForm);
    }
});

// Highlight Rows on Hover
document.addEventListener("DOMContentLoaded", function () {
    const tableRows = document.querySelectorAll("table tbody tr");

    tableRows.forEach((row) => {
        row.addEventListener("mouseover", function () {
            this.style.backgroundColor = "#f0f0f0";
        });

        row.addEventListener("mouseout", function () {
            this.style.backgroundColor = "transparent";
        });
    });
});
