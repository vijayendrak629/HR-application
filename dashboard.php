<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            position: relative;
        }

        .dashboard-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: left;
            position: relative; /* Added to enable absolute positioning */
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        select, input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        /* Position the logout button */
        #logout-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #e74c3c; /* Button style */
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        #logout-button:hover {
            background-color: #c0392b; /* Hover style */
        }

        @media (max-width: 400px) {
            .dashboard-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
<button id="logout-button" onclick="location.href='logout.php'">Logout</button>
    <div class="dashboard-container">
        
        <h1>Welcome, John Doe</h1>
        <h2>Select Functionality:</h2>
        <select id="functionality">
            <option value="festive_notification">Festive Notification</option>
            <option value="new_employee_welcome">New Employee Welcome</option>
            <option value="festive_email">Festive Email</option>
            <option value="birthday_card">Birthday Card</option>
            <option value="company_update">Company Update</option>
        </select>

        <h2>Select Email Sender:</h2>
        <select id="email_sender">
            <option value="martechs_email">Martechs Email</option>
            <option value="hr_email">HR Email</option>
        </select>

        <h2>Select Recipients:</h2>
        <input type="text" id="recipients" placeholder="Enter email addresses, comma-separated">

        <h2>Set Email Template:</h2>
        <textarea id="email_template" rows="5" placeholder="Paste your email template here"></textarea>

        <button id="send_email">Send Email</button>
    </div>
</body>
</html>
