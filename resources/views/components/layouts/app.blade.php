<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>{{ $title ?? 'E-commerce' }}</title>
</head>

<body>
    <div class="d-flex">
        <aside class="sidebar">
            <div class="logo d-flex align-items-center gap-3">
                <div class="icon-box">
                    <i class=""></i>
                </div>
                <div>
                    <h6 class="mb-0 fw-semibold">Loja Commerce</h6>
                </div>
            </div>

            <div class="nav-section-title"></div>

            <nav class="nav flex-column px-2">
                <a href="#" class="nav-link"><i class=""></i> Login</a>
                <a href="#" class="nav-link"><i class=""></i> Dashboard</a>
                <a href="#" class="nav-link"><i class=""></i> Cadastro</a>
                <a href="#" class="nav-link"><i class=""></i> Estoque</a>
                <a href="#" class="nav-link"><i class=""></i> Logout</a>
            </nav>

            <div class="mt-auto px-3 py-4 border-top">
                <div class="status-box">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <div class="status-dot"></div>
                        <span class="fw-medium">Loja Online</span>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-grow-1 d-flex flex-column">
            <header class="header">
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-shield-lock text-primary fs-4"></i>
                    <h5 class="mb-0 fw-semibold">Ambiente Seguro</h5>
                </div>
            </header>
            <main class="main-content">
                {{ $slot }}
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>
</html>