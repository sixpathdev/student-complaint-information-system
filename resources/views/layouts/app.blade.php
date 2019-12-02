<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        /* these styles will animate bootstrap alerts. */
        .margintop-content {
            position: relative;
            top: 1em;
        }

        .marginbottom-content {
            position: relative;
            bottom: 14em;
            margin-bottom: 5em;
        }

        .smaller-h4,
        .text-gray {
            font-size: 18px;
            color: gray;
        }

        .alert {
            z-index: 99;
            top: 100px;
            right: 37%;
            min-width: 30%;
            position: fixed;
            animation: slide 0.5s forwards;
        }

        .bg-lavender {
            background-color: lavender;
            height: 91vh;
            max-height: 91vh;
        }

        .sidebar-bg {
            background-color: #414141;
            height: 91vh;
            max-height: 91vh;
            padding: 0 !important;
        }

        .form-label {
            color: gray;
        }

        .bg-footer {
            padding: 0.6em 0;
            margin-left: 18%;
            text-align: center;
        }

        @keyframes slide {
            100% {
                top: 25px;
            }
        }

        .togglecontent {
            display: none;
        }

        .toggle-button {
            display: none;
        }

        @media screen and (max-width: 668px) {
            .margintop-login-content {
                margin-top: 0.4em;
            }
            .alert {
                /* center the alert on small screens */
                width: 90%;
                max-width: 95%;
                left: 14px;
                right: 10px;
            }

            .custom-text-size {
                font-size: 9px;
            }

            .custom-text-size2 {
                font-size: 12px;
            }

            .custom-text-size3 {
                font-size: 26px;
                color: gray;
            }

            .sidebar-toggle {
                display: none;
            }

            .toggle-menu {
                display: block;
                width: 45%;
                max-width: 60%;
            }

            .toggle-button {
                display: block;
            }

        }
    </style>

    <title>{{config('app.name')}}</title>
</head>

<body>

    @include('inc.navbar')
    <main class="container-fluid bg-lavender">
        <div class="row">
            @yield('content')
            @include('inc.footer')
        </div>
    </main>

    <script src="{{asset('js/app.js')}}"></script>

    {{-- Success Alert --}}
    @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('status')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    {{-- Error Alert --}}
    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        //close the alert after 3 seconds.
        $(document).ready(function(){
	    setTimeout(function() {
	        $(".alert").alert('close');
        }, 3000);
        $(".menu-btn").click(function (e) {
        e.preventDefault;
        $(".sidebar-toggle").toggleClass("toggle-menu");
        $(".toggle-block").toggleClass("togglecontent");
        });
        });
    </script>

</body>

</html>