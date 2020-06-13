<nav class="navbar navbar-expand-lg navbar-light bg-light py-5">
    <div class="container ">
        <a class="navbar-brand text-danger site-logo" href="#">GameWars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item px-4 {{Request::path()==='/'?'active':''}}">
                    <a class="nav-link" href="/"> Home</a>
                </li>
                <li class="nav-item  px-4 {{Request::path()==='articles' ? 'active':''}}">
                    <a class="nav-link" href="/articles">Aticles</a>
                </li>
                <li class="nav-item px-4{{Request::path()==='articles/create' ? 'active':''}}">
                    <a class="nav-link" href="/articles/create">Create Article</a>
                </li>
                <li class="nav-item  px-4 {{Request::path()==='/about' ? 'active':''}}">
                    <a class="nav-link" href="/about">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

