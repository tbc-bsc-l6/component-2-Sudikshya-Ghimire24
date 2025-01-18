<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            height: 100%;
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
        }

        /* Main Container */
        .dashboard-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 50px;
            height: 100%;
            background: linear-gradient(135deg, #2C6B2F, #4CAF50); /* Green Gradient */
            color: white;
        }

        /* Header Section */
        .dashboard-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .dashboard-title {
            font-size: 4rem;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .welcome-message {
            font-size: 1.8rem;
            color: white;
            margin-bottom: 30px;
            font-weight: lighter;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Card Section */
        .content-card {
            width: 100%;
            max-width: 900px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .content-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .content-card h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .content-card p {
            font-size: 1.2rem;
            color: #555;
            line-height: 1.6;
        }

        
        /* Responsive Design */
        @media (max-width: 768px) {
            .content-card {
                padding: 30px;
            }

            .dashboard-title {
                font-size: 2.5rem;
            }

            .welcome-message {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="dashboard-container">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <h1 class="dashboard-title">Admin Dashboard</h1>
            <p class="welcome-message">Welcome back, Admin! We're happy to have you here.</p>
        </div>

        <!-- Welcome Content Cards -->
        <div class="content-card">
            <h2>Dashboard Overview</h2>
            <p>Welcome to the Admin Dashboard. Here you can manage your platform, review important information, and access all the tools you need for efficient operations. This page offers an overview of everything you need to get started. Explore all the sections and see what's new!</p>
        </div>

        <div class="content-card">
            <h2>Overview of Features</h2>
            <p>Manage users, products, and track activity all from this central dashboard. With simple navigation and a user-friendly interface, you can stay on top of all the tasks that matter. Let us know if you need assistance.</p>
        </div>

        <div class="content-card">
            <h2>Important Announcements</h2>
            <p>Stay updated with the latest changes to your platform. The announcements section will keep you informed about any important updates and improvements.</p>
        </div>

        <div class="content-card">
            <h2>Get Started</h2>
            <p>For new admins or if you're getting back to your dashboard, we recommend starting with a review of the system overview and checking out the available tools. Everything is designed to help you navigate easily.</p>
        </div>

      @include('footer')
    </div>

</body>
</html>
