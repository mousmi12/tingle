<header>
        <section>
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img
                  src="{{asset('assets/userpage/Image/logo.png')}}"
                  width="100px"
                  alt=""
                  srcset=""
                />
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                  <a
                    class="nav-link active fw-bold"
                    aria-current="page"
                    href="#"
                    >HOME</a
                  >
                  <a class="nav-link fw-bold" href="{{route('user.about')}}">ABOUT</a>
                  <a class="nav-link fw-bold" href="{{route('user.index')}}">PRODUT</a>
                  <a class="nav-link fw-bold" href="#">CONTACT</a>
                </div>
              </div>
            </div>
          </nav>
        </section>
      </header>