<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->

            <style>   
                  @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap");

   :root {
  --main-color: #11101d;
  --color-dark: #1d2231;
  --text-grey: #8390a2;   
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: "Poppins", sans-serif;
}

.sidebar {
  width: 345px;
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  z-index: 100;
  background: var(--main-color);
  transition: width 300ms;
}
.sidebar-brand {
  height: 90px;
  padding: 1rem 0rem 1rem 2rem;
  color: #fff;
}
.sidebar-brand span {
  display: inline-block;
  padding-right: 1rem;
}
.sidebar-menu li {
  width: 100%;
  margin-bottom: 1.7rem;
  padding-left: 1rem;
}
.sidebar-menu {
  margin-top: 1rem;
}
.sidebar-menu a {
  padding-left: 2rem;
  display: block;
  color: #fff;
  font-size: 1.1rem;
}
#nav-toggle:checked + .sidebar {
  width: 70px;
}
#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li {
  padding-left: 1rem;
  text-align: center;
}
#nav-toggle:checked + .sidebar li a {
  padding-left: 0rem;
}
#nav-toggle:checked + .sidebar .sidebar-brand h1 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child {
  display: none;
}
.sidebar-menu a span:first-child {
  font-size: 1.5rem;
  padding-right: 1rem;
}
.sidebar-menu a.active {
  background: #fff;
  padding-top: 1rem;
  padding-bottom: 1rem;
  color: var(--main-color);
  border-radius: 30px 0px 0px 30px;
}
#nav-toggle:checked ~ .main-content {
  margin-left: 70px;
}
#nav-toggle:checked ~ .main-content header {
  width: calc(100% - 70px);
  left: 70px;
}
.main-content {
  transition: margin-left 300ms;
  margin-left: 345px;
}
header {
  background: #fff;
  display: flex;
  justify-content: space-between;
  padding: 1rem 1.5rem;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
  position: fixed;
  left: 345px;
  top: 0;
  z-index: 100;
  width: calc(100% - 345px);
  transition: left 300ms;
}

#nav-toggle {
  display: none;
}
header h2 {
  color: #222;
}
header label span {
  font-size: 1.7rem;
  padding-right: 1rem;
}
.search-wrapper {
  border: solid 1px #ccc;
  border-radius: 30px;
  height: 50px;
  display: flex;
  align-items: center;
  overflow-x: hidden;
}
.search-wrapper span {
  display: inline-block;
  padding: 0rem 1rem;
  font-size: 1.5rem;
}
.search-wrapper input {
  height: 100%;
  padding: 0.5rem;
  border: none;
  outline: none;
}
.user-wrapper {
  display: flex;
  align-items: center;
}
.user-wrapper img {
  border-radius: 50%;
  margin-right: 0.5rem;
}

.user-wrapper small {
  display: inline-block;
  color: var(--text-grey);
  margin-top: -1px !important;
}
main {
  margin-top: 85px;
  padding: 2rem 1.5rem;
  background: #f1f5f9;
  min-height: calc(100vh - 90px);
}
.cards {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 2rem;
  margin-top: 1rem;
}
.card-single {
  display: flex;
  justify-content: space-between;
  background: #fff;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(154, 160, 185, 0.05),
    0 15px 40px rgba(166, 173, 201, 0.2);
}
.card-single div:last-child span {
  color: var(--main-color);
  font-size: 3rem;
}
.card-single div:first-child span {
  color: var(--text-grey);
}
.card-single:last-child {
  background: var(--main-color);
}
.card-single:last-child h1,
.card-single:last-child div:first-child span,
.card-single:last-child div:last-child span {
  color: #fff;
}

.recent-grid {
  margin-top: 3.5rem;
  display: grid;
  grid-gap: 2rem;
  grid-template-columns: 65% auto;
}
.card {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(154, 160, 185, 0.05),
    0 15px 40px rgba(166, 173, 201, 0.2);
  padding: 1rem;
}
.card-header {
  padding: 1rem;
}
.card-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #f0f0f0;
}
.card-header button {
  background: var(--main-color);
  border-radius: 10px;
  color: #fff;
  font-size: 0.8rem;
  padding: 0.5rem 1rem;
  border: 1px solid var(--main-color);
}
table {
  border-collapse: collapse;
}
thead tr {
  border-top: 1px solid #f0f0f0;
  border-bottom: 2px solid #f0f0f0;
}
thead td {
  font-weight: 700;
}
td {
  padding: 0.5rem 1rem;
  font-size: 0.9rem;
  color: #222;
}

tr td:last-child {
  display: flex;
  align-items: center;
}
td .status {
  display: inline-block;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  margin-right: 1rem;
}
.status.purple {
  background: rebeccapurple;
}
.status.pink {
  background: deeppink;
}
.status.orange {
  background: orangered;
}
.table-responsive {
  width: 100%;
  overflow-x: auto;
}
.customer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.5rem 0.7rem;
}
.info {
  display: flex;
  align-items: center;
}
.info img {
  border-radius: 50%;
  margin-right: 1rem;
}
.info h4 {
  font-size: 0.8rem;
  font-weight: 700;
  color: #222;
}
.info small {
  font-weight: 600;
  color: var(--text-grey);
}
.contact span {
  font-size: 1.2rem;
  display: inline-block;
  margin-left: 0.5rem;
  color: var(--main-color);
}

@media only screen and (max-width: 1200px) {
  .sidebar {
    width: 70px;
  }
  .sidebar .sidebar-brand,
  .sidebar li {
    padding-left: 1rem;
    text-align: center;
  }
  #nav-toggle:checked + .sidebar li a {
    padding-left: 0rem;
  }
  .sidebar .sidebar-brand h1 span:last-child,
  .sidebar li a span:last-child {
    display: none;
  }

  .main-content {
    margin-left: 70px;
  }
  .main-content header {
    width: calc(100% - 70px);
    left: 70px;
  }
}

@media only screen and (max-width: 960px) {
  .cards {
    grid-template-columns: repeat(3, 1fr);
  }
  .recent-grid {
    grid-template-columns: 60% 40%;
  }
}

@media only screen and (max-width: 768px) {
  .cards {
    grid-template-columns: repeat(2, 1fr);
  }
  .recent-grid {
    grid-template-columns: 100%;
  }
  .search-wrapper {
    display: none;
  }
  .sidebar {
    left: -100% !important;
  }
  header h2 {
    display: flex;
    align-items: center;
  }
  header h2 label {
    display: inline-block;
    text-align: center;
    background: var(--main-color);
    padding-right: 0rem;
    margin-right: 1rem;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center !important;
  }
  header h2 span {
    text-align: center;
    padding-right: 0rem;
  }
  header h2 {
    font-size: 1.1rem;
  }
  .main-content {
    width: 100%;
    margin-left: 0rem;
  }
  header {
    width: 100% !important;
    left: 0 !important;
  }
  #nav-toggle:checked + .sidebar {
    left: 0 !important;
    z-index: 100;
    width: 345px;
  }

  #nav-toggle:checked .sidebar .sidebar-brand,
  #nav-toggle:checked + .sidebar li {
    padding-left: 2rem;
    text-align: left;
  }

  #nav-toggle:checked + .sidebar li a {
    padding-left: 1rem;
  }
  #nav-toggle:checked + .sidebar .sidebar-brand h1 span:last-child,
  #nav-toggle:checked + .sidebar li a span:last-child {
    display: inline;
  }
  #nav-toggle:checked ~ .main-content {
    margin-left: 0rem !important;
  }
}
@media only screen and (max-width: 560px) {
  .cards {
    grid-template-columns: 100%;
  }
}

            </style>      
    
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
          <h1> <span class="fab fa-asymmetrik"> </span> <span>KelMar</span>
          </h1>
        </div>
        
        <div class="sidebar-menu">
          <ul>
            <li>
              <a href="#" class="active">
                <span class="fas fa-tachometer-alt"></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fas fa-users" ></span>
                <span>Customers</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fas fa-stream"></span>
              <span>Projects</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fas fa-shopping-cart"></span>
                <span>Orders</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fas fa-boxes"></span>
                <span>Inventory</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fas fa-user-circle"></span>
                <span>Accounts</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="fas fa-tasks"></span>
                <span>Task</span>
              </a>
            </li>
          </ul>

        </div>
    </div>    

    <div class="main-content">
      <header>
        <h2>
          <label for="nav-toggle">
            <span class="fas fa-bars"></span>
          </label>
          Dashboard
        </h2>

        <div class="search-wrapper">
          <span class="fas fa-search"> </span>
          <input type="search" placeholder="Search..." />

        </div>

        <!-- <div class="user-wrapper">
         <img src="https://bit.ly/3bvT89p" width="40px" height="40px" alt="profile-img">
         <div class="">
            <h4>{{ Auth::user()->name }}</h4>
            <small>Super Admin</small>
         </div> 
        </div>  -->

     
           
      <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>


      


      </header>

      <main>
        <div class="cards">
          <div class="card-single">
            <div>
              <h1>50</h1>
              <span>Customers</span>
            </div>
            <div>
              <span class="fas fa-users"></span>
            </div>
          </div>
          <div class="card-single">
            <div>
              <h1>12</h1>
              <span>Projects</span>
            </div>
            <div>
              <span class="fas fa-clipboard-list"></span>
            </div>
          </div>
          <div class="card-single">
            <div>
              <h1>15</h1>
              <span>Orders</span>
            </div>
            <div>
              <span class="fas fa-shopping-cart"></span>
            </div>
          </div>
          <div class="card-single">
            <div>
              <h1>$50K</h1>
              <span>Income</span>
            </div>
            <div>
              <span class="fas fa-wallet"></span>
            </div>
          </div>

        </div>

        <div class="recent-grid">
          <div class="projects">
            <div class="card">
              <div class="card-header">
                <h2>Recent Projects</h2>
                <button>See all <span class="fas fa-arrow-right"></span> </button>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table width="100%">
                  <thead>
                    <tr>
                      <td>Project Title</td>
                      <td>Department</td>
                      <td>Status</td>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Website</td>
                      <td>Frontend</td>
                      <td>
                        <span class="status purple"></span>
                        Review
                      </td>
                    </tr>
                    <tr>
                      <td>Website</td>
                      <td>Frontend</td>
                      <td>
                        <span class="status orange"></span>
                        Pending
                      </td>
                    </tr>
                    <tr>
                      <td>Website</td>
                      <td>Frontend</td>
                      <td>
                        <span class="status pink"></span>
                        In Progress
                      </td>
                    </tr>
                    <tr>
                      <td>Website</td>
                      <td>Frontend</td>
                      <td>
                        <span class="status purple"></span>
                        Review
                      </td>
                    </tr>
                    <tr>
                      <td>Website</td>
                      <td>Frontend</td>
                      <td>
                        <span class="status pink"></span>
                        In Progress
                      </td>
                    </tr>
                  </tbody>

                </table>
                </div>
              </div>

            </div>

          </div>
          <div class="customers">
            <div class="card">
              <div class="card-header">
                  <h2>New Customers</h2>
                  <button>See all <span class="fas fa-arrow-right"></span> </button>
              </div>
              <div class="card-body">
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Malik Abushabab</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Malik Abushabab</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Malik Abushabab</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Malik Abushabab</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Malik Abushabab</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Malik Abushabab</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
                <div class="customer">
                  <div class="info">
                    <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                    <div>
                      <h4>Malik Abushabab</h4>
                      <small>CEO</small>
                    </div>
                  </div>
                  <div class="contact">
                      <span class="fas fa-user-circle"></span>
                      <span class="fas fa-comment"></span>
                      <span class="fas fa-phone-alt"></span>
                    </div>
                </div>
              </div>
            </div>

          </div>
          
        </div>  

      </main>
    </div>



</x-app-layout>
