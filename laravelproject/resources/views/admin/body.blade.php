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

       /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

/* Main Container */
.dashboard-container {
    flex: 1; /* This ensures the main content stretches to take available space */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 50px;
    background: white;
    color: black;
}



        /* Header Section */
        .dashboard-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .dashboard-title {
            font-size: 4rem;
            font-weight: bold;
            color: black;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .welcome-message {
            font-size: 1.8rem;
            color: black;
            margin-bottom: 30px;
            font-weight: lighter;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Card Section */
        .content-card {
            width: 100%;
            max-width: 900px;
            background-color: lightblue;
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

        /* Footer Section */
footer {
    width: 100%;
    background-color: #333;
    color: white;
    text-align: center;
    padding: 15px 0;
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

       
    </div>

</body>
@include('footer')
</html>
