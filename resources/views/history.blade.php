<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <title>Horus Test</title>
</head>
<body>
    <nav>
        <ul class="sidebar">
            <div class="sidebar-content">
                <li onclick="hideSidebar()"><a href="#" class="closebtn"><i class="fa-solid fa-xmark fa-xl"></i></a></li>
                <li><a href="{{ route('admin.home') }}"><img src="{{ asset('img/pithik.png') }}" width="80"></a></li>
                <h1><span>Kategori</span></h1>
                <span class="sidebar-category-content">
                    @foreach ($kategori as $k)
                    <div class="category-count">
                        <form action="{{ route('admin.kategori') }}" method="POST">
                            @csrf
                            <input type="hidden" id="id_kategori" name="name_kategori" value="{{ $k->kategori }}">
                            <input type="submit" value="{{ $k->kategori }}">
                        </form>
                        <p>{{ $k->total }}</p>
                    </div>
                    @endforeach
                </span>
                <a href="{{ route('logout') }}"><button class="button"> Logout </button></a>
            </div>
        </ul>

        <ul class="navfull">
            <li onclick="showSidebar()" class="menu-button"><a href=""><i class="fa-solid fa-bars fa-2xl"></i></a></li>
            <li><a href="{{ route('admin.home') }}"><img src="{{ asset('img/pithik.png') }}" width="50"></a></li>
            <li class="hideOnMobile"><h1>VOUCHER DATA</h1></li>
            <li><a href="{{ route('admin.home') }}"><button class="button-history"> Home </button></a></li>
        </ul>
    </nav>

    
    <section class="container-voucher-right" id="container-voucher-right">
        <div class="voucher-claim">
            <h1><span>History</span></h1>
            <div class="voucher-table">
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
        
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td><img src="{{ asset('img/').'/'.$d->foto}}" width="30">{{ $d->nama }}</td>
                            <form action="{{ route('admin.remove-proses', ['id' => $d->id ]) }}" method="POST">
                                @csrf
                                @method('PUT')
                            <td><div class="button_td">
                                    <button class="remove-button" type="submit">Remove</button>
                                </div>
                            </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="category-voucher">
            <h1><span>Kategori</span></h1>
            <div class="category-content">
                @foreach ($kategori as $k)
                <div class="category-count">
                    <form action="{{ route('admin.kategori-history') }}" method="POST">
                        @csrf
                        <input type="hidden" id="id_kategori" name="name_kategori" value="{{ $k->kategori }}">
                        <input type="submit" value="{{ $k->kategori }}">
                    </form>
                    <p>{{ $k->total }}</p>
                </div>
                @endforeach
                <a class="button" href="{{ route('logout') }}">LOG OUT </a>
            </div>
        </div>
    </section>

    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'flex';
        }

        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = 'none';
        }
    </script>
</body>
</html>