 {{-- NAVBAR SECTION --}}
        <!-- top navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
              {{-- NAVBAR BRAND  --}}
              <div>
                <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions" href="#">
                    <i class="bi bi-layout-sidebar text-white fs-4"></i>
                </a>
                <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Tazakka</a>
            </div>
  
              {{-- END NAVBAR BRAND  --}}
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#topNavBar"
                aria-controls="topNavBar"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              {{-- INPUT SEARCH NAVBAR --}}
              <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                  <div class="input-group">
                    <input
                      class="form-control"
                      type="search"
                      placeholder="Search"
                      aria-label="Search"
                    />
                    <button class="btn btn-success" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
                {{-- END INPUT SEARCH NAVBAR --}}
  
                {{-- PROFILE USER NAVBAR --}}
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle ms-2"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                      {{-- goto  home page --}}
                      <li><a class="dropdown-item" href="/">Home</a></li>
                      {{-- logout page --}}
                      <form method="POST" action="/logout">
                        <li><a class="dropdown-item fw-bold text-danger" href="/logout">Logout</a></li>
                      </form>
                    </ul>
                  </li>
                </ul>
                {{--END PROFILE USER NAVBAR --}}
              </div>
               
            </div>
          </nav>
      {{-- END NAVBAR SECTION --}}