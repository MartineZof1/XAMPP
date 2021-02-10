<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" 
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">Logo</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php include('menu_items.php');
            foreach (getMenuItems() as $itemName => $itemUrl){
                echo '<li class="nav-item"><a class="nav-link '.($itemUrl == getUrlPHPfileName() ? 'active' : '').
                '" arial-current="page" href="'.$itemUrl.'">'.$itemName.'</a></li>';
            }
            ?>
            </ul>
            <form class="d-flex" method="post" action="search.php">
                <input class="form-control me-2" type="search" placeholder="Search" arial-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>