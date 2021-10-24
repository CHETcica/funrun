<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<title>funrun</title>
</head>
<body>
		<nav class="navbar navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">funrun</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">funrun</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                        <a class="nav-link" href="/category">category</a>
                    </li>
                    
                    </ul>
                    
                </div>
                </div>
            </div>
		</nav>
	<div class="container-fluid">
		<img class="imgbg__hero" src="https://wmimg.azureedge.net/public/img/home/hp-4-min.jpg" alt="">
		    <div class="hero__form">
                <div class="row">
                    <?php if($Category): ?>
                        <?php foreach($Category as $Caty): ?>
                            <div class="col m-2">
                                <div class="card " style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $Caty['category_name'] ?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $Caty['length'] ?></h6>
                                        <p class="card-text"><?php echo $Caty['price'] ?></p> 
                                        <a href="/register" class="card-link">Regis</a>
                                    </div>
                                </div>
                            </div>   
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                                

            </div>
            
	</div>
</body>
</html>