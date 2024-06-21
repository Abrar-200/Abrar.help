<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrar's Helpline Sirajganj District</title>
    <style>
        body {
            background-color: green;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .header {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
        .menu {
            position: absolute;
            top: 20px;
            right: 20px;
            cursor: pointer;
        }
        .menu-items {
            display: none;
            position: absolute;
            top: 50px;
            right: 20px;
            background-color: white;
            color: black;
            border: 1px solid #ccc;
            padding: 10px;
            z-index: 1;
        }
        .menu-items a {
            color: black;
            text-decoration: none;
            display: block;
            margin: 5px 0;
        }
        .menu-items a:hover {
            background-color: #eee;
        }
        .content {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="header">Abrar's Helpline Sirajganj District</div>
    <div class="menu" onclick="toggleMenu()">Menu</div>
    <div class="menu-items" id="menu-items">
        <a href="?item=1">Government Helplines</a>
        <a href="?item=2">Police Stations</a>
        <a href="?item=3">RAB Helplines</a>
        <a href="?item=4">Hospital Helplines</a>
        <a href="?item=5">Ambulances Services</a>
        <a href="?item=6">Fire Services Helplines</a>
        <a href="?item=7">Primary Treatment Guidelines</a>
    </div>
    <div class="content">
        <img src="helpline.jpg" alt="Helpline Image" width="300" height="200"><br>
        <?php
            if (isset($_GET['item'])) {
                switch ($_GET['item']) {
                    case 1:
                        echo "<p>Examples of Government Helplines</p>";
                        break;
                    case 2:
                        echo "<p>Examples of Police Stations</p>";
                        break;
                    case 3:
                        echo "<p>Examples of RAB Helplines</p>";
                        break;
                    case 4:
                        echo "<p>Examples of Hospital Helplines</p>";
                        break;
                    case 5:
                        echo "<p>Examples of Ambulance Services</p>";
                        break;
                    case 6:
                        echo "<p>Examples of Fire Services Helplines</p>";
                        break;
                    case 7:
                        echo "<p>Examples of Primary Treatment Guidelines</p>";
                        break;
                    default:
                        echo "<p>Select an option from the menu</p>";
                }
            } else {
                echo "<p>Welcome to Abrar's Helpline Sirajganj District. Please select a menu item to view details.</p>";
            }
        ?>
    </div>
    <script>
        function toggleMenu() {
            var menuItems = document.getElementById('menu-items');
            if (menuItems.style.display === 'block') {
                menuItems.style.display = 'none';
            } else {
                menuItems.style.display = 'block';
            }
        }
    </script>
</body>
</html>