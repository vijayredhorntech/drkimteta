<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Dr. Kimteta</title>
</head>
<body>
@include('layouts.header')
@yield('content')
@include('layouts.footer')


<script>

    function toggleNavbar() {
        const navBar = document.getElementById('navBar');
        navBar.classList.toggle('hidden');
    }

    function openService()
    {
        const serviceList = document.getElementById('serviceList');
        serviceList.classList.toggle('hidden');
    }
    function openClinic()
    {
        const clinicList = document.getElementById('clinicList');
        clinicList.classList.toggle('hidden');

    }

</script>

<script>
    // Hide all tab content except the first tab when the page loads
    document.querySelectorAll(".tab-content").forEach(function(tabContent, index) {
        if (index !== 0) {
            tabContent.style.display = "none";
        }
    });

    // Add the 'active' class to the first tab and 'active-tab' to the first default tab when the page loads
    document.querySelector(".mainTab").classList.add("active");
    document.querySelector(".mainTab").classList.add("active-tab");

    function openTab(event, tabId) {
        // Hide all tab content
        document.querySelectorAll(".tab-content").forEach(function(tabContent) {
            tabContent.style.display = "none";
        });

        // Get all tab elements and remove "active" class
        document.querySelectorAll(".mainTab").forEach(function(tab) {
            tab.classList.remove("active");
        });

        // Show the selected tab content and mark the corresponding tab as active
        document.getElementById(tabId).style.display = "block";
        event.currentTarget.classList.add("active");

        // Remove the 'active-tab' class from other tabs
        document.querySelectorAll(".tab.mainTab").forEach(function(tab) {
            if (tab !== event.currentTarget) {
                tab.classList.remove("active-tab");
            }
        });

        // Add the 'active-tab' class to the clicked tab
        event.currentTarget.classList.add("active-tab");
    }
</script>
</body>
</html>
