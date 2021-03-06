<!DOCTYPE html>
<html lang="sp">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Clientes - Invoice OZEROS</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" /> 
</head>
<main>
<body>

    <div class="section container">
        <a href="index.php">
            <img width="300px" src="https://www.ozeros.com/wp-content/uploads/2016/05/ozeros-main-logo.png">
        </a>
    </div>

    <!-- Dropdown Invoices -->
    <ul id="ddInvoices" class="dropdown-content">
        <li><a href="invoice.php" class="blue-text darken-2">Emitir</a></li>
        <li class="divider"></li>
        <li><a href="invoice_lista.php" class="blue-text darken-2">Listar</a></li>
        <li><a href="#!" class="blue-text darken-2">Buscar</a></li>
    </ul>

    <!-- Dropdown Clientes -->
    <ul id="ddCliente" class="dropdown-content">
        <li><a href="clientes.php" class="blue-text darken-2">Agregar</a></li>
        <li class="divider"></li>
        <li><a href="clientes_lista.php" class="blue-text darken-2">Listar</a></li>
        <li><a href="#!" class="blue-text darken-2">Buscar</a></li>
    </ul>

    <!-- Dropdown Emisor -->
    <ul id="ddEmisor" class="dropdown-content">
        <li><a href="emisor.php" class="blue-text darken-2">Agregar</a></li>
        <li class="divider"></li>
        <li><a href="emisor_lista.php" class="blue-text darken-2">Listar</a></li>
        <li><a href="#!" class="blue-text darken-2">Buscar</a></li>
    </ul>
    <nav class="blue darken-3">
        <div class="nav-wrapper container">
            <ul class="right hide-on-med-and-down">
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="ddInvoices">Invoices<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="ddCliente">Cliente<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="ddEmisor">Emisor<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link 1</a></li>
            <li><a href="#">Navbar Link 2</a></li>
            <li><a href="#">Navbar Link 3</a></li>
            <li><a href="#">Navbar Link 4</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>