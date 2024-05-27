<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
<div class="row g-0">
    <!-- sidebar -->
    <div class="p-3 col fixed text-white bg-dark">
        <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none ">
            <span class="fs-4">My Account</span>
        </a>
        <hr />
        <ul class="nav flex-column">
            
            <li><a href="{{ route('account.product.index') }}" class="nav-link text-white">Products <i class="bi bi-bag-plus-fill ms-2"></i></a></li>
            <li><a href="{{ route('account.sales') }}" class="nav-link text-white">Sales<i class="bi bi-piggy-bank ms-2"></i></a></li>
            <li><a href="{{ route('account.order.index') }}" class="nav-link text-white">Orders <i class="bi bi-receipt ms-2"></i></a></li>
            <hr>
            <li><a href="{{ route('account.balance.index') }}" class="nav-link text-white"> Account Balance<i class="bi bi-cash ms-2"></i></a></li>
            <li><a href="#" class="nav-link text-white">Profile Setting <i class="bi bi-person-lines-fill ms-2"></i></a></li>

            
        </ul>
    </div>
    <!-- sidebar -->
    <div class="col content-grey">
        
        
        <div class="container">
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<div class="copyright py-4 text-center text-white">
    <div class="container">
    <small>
    Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
    href="https://twitter.com/danielgarax">
    Davies Amedeus
    </a>
    </small>
    </div>
</div>
<!-- footer --><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>