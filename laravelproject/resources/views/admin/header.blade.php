<header class="header">
  <style>
    .logout input[type="submit"] {
  padding: 10px 20px; /* Increase padding */
  font-size: 16px;    /* Increase font size */
  border-radius: 5px; /* Round corners */
  background-color: skyblue; /* Add a background color */
  color: white;      /* Set text color */
  cursor: pointer;   /* Add a pointer cursor on hover */
  border: none;      /* Remove default border */
}

.logout input[type="submit"]:hover {
  background-color: #d32f2f; /* Darker shade on hover */
}

  </style>   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Admin</strong><strong>Dashboard</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">A</strong><strong>D</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          
            <!-- Log out               -->
            <div class="list-inline-item logout">                 
                

            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                          <input type="submit" value="Logout"> 
                        </form>
          </div>
        </div>
      </nav>
    </header>