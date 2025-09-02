<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <style>
            <?php
                include 'css/style.css';
            ?>
        </style>

        <title>index</title>
    </head>
    <body>

        <div class="card" style="width: 18rem;">
            
            <img src="images/img_welcome.jpg" class="card-img-top" alt="img_welcome">
            
            <div class="card-body">
                
                <form action="profile.php" method="post">
                    <input type="text" class="form-control mb-2" name="name" placeholder="Username" required>
                    <input type="email" class="form-control mb-2" name="email" placeholder="Email" required> 
                    <input type="password" class="form-control mb-2" name="password" placeholder="Password" required>
                    <input type="submit" class="btn btn-primary w-100" value="submit">
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script>
            <?php
                include 'js/script.js';
            ?>
        </script>
    </body>
</html>

