<div class="hero-head">
    <header class="nav">
        <div class="container">
            <div class="nav-left">
                <a class="nav-item">
                    <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
                </a>

                <a href="/posts/create" class="nav-item">
                    New Post
                </a>

                <a class="nav-item">
                    Press
                </a>

                <a class="nav-item">
                    New Hires
                </a>

                <a class="nav-item">
                    About
                </a>
            </div>

            <div class="nav-right nav-menu">

                @if(auth()->check())

                    <a href="" class="nav-item">
                        {{ auth()->user()->name }}
                    </a>

                    <span class="nav-item">
                        <a href="/logout" class="button is-danger">
                            Logout
                        </a>
                    </span>
                @else
                  
                  <span class="nav-item">
                      <a href="/login" class="button is-info">
                          Login
                      </a>
                  </span>

                @endif
            </div>
        </div>
    </header>
</div>