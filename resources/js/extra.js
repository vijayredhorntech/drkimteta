
    // Hide all tab content except the first tab when the page loads
    document.querySelectorAll(".tab-content").forEach(function(tabContent, index) {
    if (index !== 0) {
    tabContent.style.display = "none";
}
});

    // Add the 'active' class to the first tab and 'active-tab' to the first default tab when the page loads
    document.querySelector(".mainTab").classList.add("bg-[#437158]");
    document.querySelector(".mainTab").classList.add("text-white");
    document.querySelector(".mainTab").classList.add("active-tab");

    function openTab(event, tabId) {
    // Hide all tab content
    document.querySelectorAll(".tab-content").forEach(function(tabContent) {
        tabContent.style.display = "none";
    });

    // Get all tab elements and remove "active" class
    document.querySelectorAll(".mainTab").forEach(function(tab) {
    tab.classList.remove("bg-[#437158]");
    tab.classList.remove("text-white");
});

    // Show the selected tab content and mark the corresponding tab as active
    document.getElementById(tabId).style.display = "block";
    event.currentTarget.classList.add("bg-[#437158]");
    event.currentTarget.classList.add("text-white");

    // Remove the 'active-tab' class from other tabs
    document.querySelectorAll(".tab.mainTab").forEach(function(tab) {
    if (tab !== event.currentTarget) {
    tab.classList.remove("active-tab");
}
});

    // Add the 'active-tab' class to the clicked tab
    event.currentTarget.classList.add("active-tab");
}
