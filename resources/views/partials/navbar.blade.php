<nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="/">DILOSARI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : ''  }}" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "About Us") ? 'active' : ''  }}" aria-current="page" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Article/Post") ? 'active' : ''  }}" aria-current="page" href="/posts">Article</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
