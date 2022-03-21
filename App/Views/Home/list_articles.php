<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/js/js/js/styles.css">

</head>
<body>
    <?php include 'includes/navbar.php'; ?>
<div id="content" class="container mb-5">
        <main class="pb-5">
            <div id="posts" class="my-5">
                <h1>Articles</h1>
                <p class="lead">Découvrez ici la liste des derniers articles du blog. Bonne lecture !</p>
                <?php 
                foreach ($post as $posts) {?>
                <h1>Title : </h1>
                <h2><?php echo htmlspecialchars($posts['title']); ?></h2><br>
                <h1>Content : </h1>
                <h2><?php echo htmlspecialchars($posts['content']); ?></h2><br>
                <h1>created_at : </h1>
                <h2><?php echo htmlspecialchars($posts['created_at']); ?></h2><br>
            
            
            
            
            
            
            <?php } ?> 
                
                ?>
                                    <div class="card mb-4 shadow-sm rounded">
                        <img class="card-img-top" src="">
                        <div class="card-body">
                            <h2 class="card-title">Documenter ses projets avec Docsify &amp; Github Pages</h2>
                            <p class="badge rounded-pill bg-secondary">découvertes</p>
                            <p class="card-subtitle text-muted">
                                    
                                   
                                                                                                </p>
                            <p class="card-text">Simple, rapide &amp; efficace, Docsify est mon coup de cœur de la semaine</p>
                            <a href="/post/1" class="btn btn-primary rounded" role="button">Lire l'article</a>
                        </div>
                    </div>
                            </div>
        </main>
    </div>
    <nav aria-label="Pagination">
                        <hr class="my-0">
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
    <?php include 'includes/footer.php'; ?>

</body>
</html>