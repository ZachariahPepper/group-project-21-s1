<!-- This page is the blade tempate for our app. Currently contains the linking to bootstrap and the navbar. If this page is included in the other views,
this will change the styling to make it consistant throughout the app. Discuss page styling with group so that we can agree on a consistent style, and apply more 
bootstrap becuase it is so much easier than writing out lines upon lines of CSS! -->

<!-- an example of exteending this view is found in the notes view -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="/css/app.css" rel="stylesheet">
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
    </head>

<body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand">Student Mangement System</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu"> <!-- if the device screen width goes below a certain threshold, a hamburger icon replaces the links into a dropdwon menu -->
                    <span class="navbar-toggler-icon">
                </button>
                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
                        </li>
                    </ul>
                </div>
        </nav>
        
        <!-- page content of the other views will go between the <main> divs -->
    <main>
        @yield('content')
    </main>
</body>
</html>

