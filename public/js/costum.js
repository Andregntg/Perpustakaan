function toggleDropdown(event, dropdownID) {
    event.stopPropagation();
    const dropdown = document.getElementById(dropdownID);
    dropdown.classList.toggle("hidden");
    dropdown.classList.toggle("block");
}

// Tutup dropdown jika pengguna mengklik di luar dropdown
window.onclick = function(event) {
    if (!event.target.matches('.dropdown-toggle')) {
        var dropdowns = document.getElementsByClassName("dropdown-menu");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (!openDropdown.classList.contains('hidden')) {
                openDropdown.classList.add('hidden');
            }
        }
    }
};

// Pastikan fungsi tersedia di window
window.toggleDropdown = toggleDropdown;
