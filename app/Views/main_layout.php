<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <title><?= $this->renderSection('page_title', true) ?></title>
</head>
<body>
    <header>
        <h1>Hederis</h1>
        <nav>
            te būs navigācija
        </nav>
    </header>
    <main>
       
        <div class="container">
             <h1 class="text-center display1"><?= $this->renderSection('page_title') ?><h1>
            <?= $this->renderSection('content') ?>
        </div>
    </main>
    


    <footer>
        <p class="text-light bg-dark p-5">This is footer</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script>

    </script>
</body>
</html>