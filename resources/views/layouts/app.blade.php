<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Venkatesh</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body{
            margin:0;
            background:#f5f7fb;
            font-family:Segoe UI;
        }

        .sidebar{
            width:250px;
            height:100vh;
            position:fixed;
            left:0;
            top:0;
            background:#0f172a;
            color:white;
        }

        .logo{
            padding:25px;
            font-size:24px;
            font-weight:bold;
            text-align:center;
            background:#16a34a;
        }

        .menu a{
            display:block;
            color:white;
            text-decoration:none;
            padding:16px 25px;
            transition:.3s;
        }

        .menu a:hover{
            background:#16a34a;
        }

        .content{
            margin-left:250px;
            padding:30px;
        }

        .topbar{
            background:white;
            padding:18px 30px;
            border-radius:12px;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,.08);
        }
    </style>

</head>
<body>

<div class="sidebar">

    <div class="logo">
        MITMS
    </div>

    <div class="menu">

        <a href="/dashboard">🏠 Dashboard</a>

        <a href="/printers">🖨 Printers</a>

        <a href="/cartridges">🖋 Cartridges</a>

        <a href="/vendors">🏢 Vendors</a>

        <a href="/reports">📊 Reports</a>

        <a href="/settings">⚙ Settings</a>

    </div>

</div>

<div class="content">

<div class="topbar">

<div>
<b>Mittsure Technology</b><br>
Printer & Cartridge Management
</div>

<div>

{{ Auth::user()->name }}

</div>

</div>

@yield('content')

</div>

</body>
</html>