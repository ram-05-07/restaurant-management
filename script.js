document.getElementById("view-menu").addEventListener("click", () => {
    fetch("http://localhost/restaurant_system/get_menu.php") // PHP API
    // fetch("http://localhost:5000/menu") // Uncomment if using Node.js
    .then(response => response.json())
    .then(data => {
        let menuSection = document.getElementById("menu-items");
        menuSection.innerHTML = ""; // Clear previous items

        data.forEach(item => {
            menuSection.innerHTML += `
                <div class="menu-item">
                    <h3>${item.name}</h3>
                    <p>Price: $${item.price}</p>
                </div>
            `;
        });
    })
    .catch(error => console.error("Error fetching menu:", error));
});
