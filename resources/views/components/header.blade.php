<nav>

    <div class="container-nav">
        <div class="logo">
           <img src="https://upload.wikimedia.org/wikipedia/commons/3/3d/DC_Comics_logo.svg" alt="logo"> 
       </div>
    <ul>
        @foreach ($menu as $item)
            <li class="menu">
            {{ $item }}
            </li>
        @endforeach
    </ul>
    <div class="search">
        <span >Search</span>
    </div>
</nav>
