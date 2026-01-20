const buttons = document.querySelectorAll(".plantsbtn");
const output = document.getElementById("output");

// Function to display plant info
function displayPlant(userkey) {
    fetch("PlantsData.json")
        .then(res => res.json())
        .then(data => {
            const user = data[userkey.toLowerCase()]; // case-insensitive
            if (!user) {
                output.innerHTML = `<p>Plant not found.</p>`;
                return;
            }

            output.innerHTML = `
                <p><strong>Name:</strong> ${user.name}</p>
                <p><strong>Description:</strong> ${user.description}</p>
                <p><strong>Benefits:</strong> ${user.benefits}</p>
            `;
            window.scrollTo({ top: 200, behavior: 'smooth' });
        })
        .catch(err => {
            console.error("Error fetching data:", err);
        });
}

// Existing "Details" buttons functionality
buttons.forEach(button => {
    button.addEventListener("click", () => {
        const userkey = button.getAttribute("data-user");
        displayPlant(userkey);
    });
});

// Search bar functionality
const searchInput = document.getElementById("searchInput");
const searchBtn = document.getElementById("searchBtn");

function searchPlant() {
    const query = searchInput.value.trim();
    if (!query) {
        output.innerHTML = `<p>Get your information.</p>`;
        return;
    }
    displayPlant(query);
}

// Event listeners for search
searchBtn.addEventListener("click", searchPlant);
searchInput.addEventListener("keypress", function (e) {
    if (e.key === "Enter") {
        searchPlant();
    }
});
