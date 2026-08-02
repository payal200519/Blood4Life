const apiUrl = "http://localhost/blood_bank";

// Fetch Donors
function fetchDonors() {
    fetch(`${apiUrl}/get_donors.php`)
        .then(response => response.json())
        .then(data => {
            const tbody = document.querySelector("#donors-table tbody");
            tbody.innerHTML = ""; // Clear previous data

            data.forEach(donor => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${donor.id}</td>
                    <td>${donor.name}</td>
                    <td>${donor.blood_group}</td>
                    <td>${donor.contact}</td>
                    <td>${donor.last_donation_date}</td>
                    <td><button onclick="deleteDonor(${donor.id})">Delete</button></td>
                `;
                tbody.appendChild(row);
            });
        })
        .catch(error => console.error("Error fetching donors:", error));
}

// Add Donor
document.getElementById("add-donor-form").addEventListener("submit", function (e) {
    e.preventDefault();
    const name = document.getElementById("name").value;
    const bloodGroup = document.getElementById("blood-group").value;
    const contact = document.getElementById("contact").value;
    const lastDonationDate = document.getElementById("last-donation-date").value;

    fetch(`${apiUrl}/add_donor.php`, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ name, blood_group: bloodGroup, contact, last_donation_date: lastDonationDate })
    })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            fetchDonors();
        })
        .catch(error => console.error("Error adding donor:", error));
});

// Delete Donor
function deleteDonor(id) {
    fetch(`${apiUrl}/delete_donor.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            fetchDonors();
        })
        .catch(error => console.error("Error deleting donor:", error));
}

// Initial Load
fetchDonors();
