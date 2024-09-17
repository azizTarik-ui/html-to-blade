<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="{{ url('frontend/dist/css/vendor/bootstrap.min.css') }}">

    <!-- Slick CSS Link -->
    <link rel="stylesheet" href="{{ url('frontend/dist/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/dist/css/vendor/slick-theme.css') }}">

    <!-- Icon Library Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Theme CSS Link -->
    <link rel="stylesheet" href="{{ url('frontend/dist/css/main.css') }}">

    <title>Blogy-Home</title>
</head>

<body>
    <!-- Header Starts Here -->
    <header>
        <div class="container">
            <div class="header">
                <!-- Logo Starts Here -->
                <a href="index.html">
                    <svg width="92" height="32" viewBox="0 0 92 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.64 25V23.784C1.04533 23.5493 1.472 23.3467 1.92 23.176C2.38933 23.0053 2.83733 22.8987 3.264 22.856V4.744C2.83733 4.65867 2.38933 4.54133 1.92 4.392C1.45067 4.22133 1.024 4.02933 0.64 3.816V2.6H5.792C6.60267 2.6 7.37067 2.568 8.096 2.504C8.82133 2.44 9.65333 2.408 10.592 2.408C11.616 2.408 12.608 2.48267 13.568 2.632C14.528 2.78133 15.3813 3.048 16.128 3.432C16.8747 3.816 17.472 4.36 17.92 5.064C18.368 5.74667 18.592 6.632 18.592 7.72C18.592 8.40267 18.464 9.04267 18.208 9.64C17.9733 10.216 17.632 10.728 17.184 11.176C16.7573 11.624 16.2453 11.9973 15.648 12.296C15.072 12.5947 14.4427 12.808 13.76 12.936V13.064C14.4427 13.1493 15.1253 13.3093 15.808 13.544C16.512 13.7787 17.1413 14.12 17.696 14.568C18.2507 15.016 18.6987 15.5813 19.04 16.264C19.4027 16.9253 19.584 17.7147 19.584 18.632C19.584 19.784 19.328 20.776 18.816 21.608C18.304 22.44 17.6107 23.1227 16.736 23.656C15.8827 24.1893 14.9013 24.584 13.792 24.84C12.6827 25.0747 11.5307 25.192 10.336 25.192C9.888 25.192 9.39733 25.1813 8.864 25.16C8.33067 25.1387 7.79733 25.1173 7.264 25.096C6.73067 25.0747 6.208 25.0533 5.696 25.032C5.20533 25.0107 4.78933 25 4.448 25H0.64ZM10.304 23.112C11.648 23.112 12.704 22.7173 13.472 21.928C14.24 21.1173 14.624 20.0507 14.624 18.728C14.624 17.9173 14.496 17.256 14.24 16.744C13.984 16.2107 13.632 15.7947 13.184 15.496C12.736 15.176 12.2027 14.9627 11.584 14.856C10.9653 14.728 10.2933 14.664 9.568 14.664H7.872V22.888C8.17067 22.952 8.48 23.0053 8.8 23.048C9.14133 23.0907 9.64267 23.112 10.304 23.112ZM8.896 12.584C9.25867 12.584 9.62133 12.5733 9.984 12.552C10.3467 12.5093 10.688 12.4667 11.008 12.424C11.84 12.0827 12.512 11.56 13.024 10.856C13.536 10.1307 13.792 9.30933 13.792 8.392C13.792 7.048 13.44 6.06667 12.736 5.448C12.032 4.808 11.1253 4.488 10.016 4.488C9.54667 4.488 9.14133 4.49867 8.8 4.52C8.45867 4.54133 8.14933 4.57333 7.872 4.616V12.584H8.896ZM30.6053 25H21.7733V23.752C22.4773 23.4107 23.1813 23.1547 23.8853 22.984V3.592L21.4533 3.336V2.088C21.7306 1.96 22.1146 1.832 22.6053 1.704C23.0959 1.576 23.6186 1.46933 24.1733 1.384C24.7493 1.27733 25.3146 1.192 25.8693 1.128C26.4453 1.04266 26.9573 0.978665 27.4053 0.935999H28.4933V22.984C29.1973 23.1547 29.9013 23.4107 30.6053 23.752V25ZM32.3983 17C32.3983 15.6987 32.5903 14.536 32.9743 13.512C33.3796 12.4667 33.9449 11.5813 34.6703 10.856C35.4169 10.1307 36.3129 9.576 37.3583 9.192C38.4036 8.808 39.5876 8.616 40.9103 8.616C42.4036 8.616 43.6836 8.82933 44.7503 9.256C45.8383 9.66133 46.7236 10.2373 47.4062 10.984C48.1103 11.7093 48.6223 12.5947 48.9423 13.64C49.2623 14.664 49.4223 15.784 49.4223 17C49.4223 18.3013 49.2303 19.4747 48.8463 20.52C48.4623 21.544 47.8969 22.4187 47.1503 23.144C46.4249 23.8693 45.5289 24.424 44.4623 24.808C43.4169 25.192 42.2329 25.384 40.9103 25.384C39.4596 25.384 38.2009 25.1813 37.1343 24.776C36.0676 24.3493 35.1823 23.7733 34.4783 23.048C33.7743 22.3013 33.2516 21.416 32.9103 20.392C32.5689 19.3467 32.3983 18.216 32.3983 17ZM37.3583 17C37.3583 17.96 37.4116 18.8453 37.5183 19.656C37.6463 20.4453 37.8596 21.1173 38.1583 21.672C38.4569 22.2267 38.8623 22.664 39.3743 22.984C39.8863 23.2827 40.5476 23.432 41.3583 23.432C41.8276 23.432 42.2543 23.3253 42.6383 23.112C43.0223 22.8773 43.3529 22.5147 43.6303 22.024C43.9076 21.512 44.1103 20.8507 44.2383 20.04C44.3876 19.208 44.4623 18.1947 44.4623 17C44.4623 16.0187 44.3983 15.1333 44.2703 14.344C44.1636 13.5547 43.9609 12.8827 43.6623 12.328C43.3849 11.7733 43.0009 11.3467 42.5103 11.048C42.0196 10.728 41.4009 10.568 40.6543 10.568C40.0996 10.568 39.6196 10.6853 39.2143 10.92C38.8089 11.1333 38.4676 11.496 38.1903 12.008C37.9129 12.4987 37.6996 13.16 37.5503 13.992C37.4223 14.8027 37.3583 15.8053 37.3583 17ZM58.8542 8.616C60.2409 8.616 61.3929 8.76533 62.3103 9.064C63.2276 9.34133 63.9209 9.69333 64.3903 10.12C65.3929 9.032 66.5449 8.27467 67.8463 7.848C67.9956 7.95467 68.1449 8.11467 68.2943 8.328C68.4436 8.52 68.5716 8.73333 68.6783 8.968C68.7849 9.20267 68.8703 9.43733 68.9343 9.672C68.9983 9.90667 69.0303 10.0987 69.0303 10.248L68.6143 11.016H65.2543C65.4889 11.3147 65.7023 11.7093 65.8943 12.2C66.1076 12.6693 66.2143 13.2347 66.2143 13.896C66.2143 14.6 66.0649 15.2613 65.7663 15.88C65.4676 16.4987 65.0089 17.0533 64.3903 17.544C63.7929 18.0133 63.0249 18.3867 62.0863 18.664C61.1689 18.9413 60.0916 19.08 58.8542 19.08C58.4916 19.08 58.1609 19.08 57.8623 19.08C57.5849 19.0587 57.3396 19.0267 57.1263 18.984C57.0409 19.112 56.9449 19.272 56.8383 19.464C56.7529 19.6347 56.7103 19.8053 56.7103 19.976C56.7103 20.3387 56.9663 20.6267 57.4783 20.84C57.9903 21.0533 58.6409 21.2453 59.4303 21.416C60.2196 21.5867 61.0623 21.7787 61.9583 21.992C62.8756 22.2053 63.7289 22.4933 64.5183 22.856C65.3076 23.1973 65.9689 23.656 66.5023 24.232C67.0356 24.7867 67.3129 25.512 67.3343 26.408C67.3556 27.2613 67.1423 28.0187 66.6943 28.68C66.2463 29.3413 65.6276 29.896 64.8383 30.344C64.0703 30.8133 63.1529 31.1653 62.0863 31.4C61.0409 31.656 59.9209 31.784 58.7263 31.784C57.3183 31.784 56.1129 31.6667 55.1102 31.432C54.1289 31.2187 53.3289 30.92 52.7103 30.536C52.0916 30.152 51.6329 29.7147 51.3343 29.224C51.0569 28.7333 50.9183 28.2213 50.9183 27.688C50.9183 27.0907 51.0356 26.5787 51.2703 26.152C51.5049 25.7253 51.8356 25.352 52.2623 25.032C52.6889 24.712 53.1796 24.4453 53.7343 24.232C54.3103 24.0187 54.9396 23.8267 55.6223 23.656C55.3023 23.5707 54.9929 23.464 54.6943 23.336C54.3956 23.208 54.1289 23.0587 53.8943 22.888C53.6596 22.696 53.4676 22.4827 53.3183 22.248C53.1689 21.992 53.0943 21.704 53.0943 21.384C53.0943 21.1067 53.1796 20.84 53.3503 20.584C53.5209 20.3067 53.7449 20.0613 54.0223 19.848C54.2996 19.6133 54.5983 19.4107 54.9183 19.24C55.2383 19.048 55.5583 18.888 55.8783 18.76C54.5343 18.4613 53.4676 17.8853 52.6783 17.032C51.8889 16.1573 51.4943 15.048 51.4943 13.704C51.4943 12.104 52.1556 10.856 53.4783 9.96C54.8009 9.064 56.5929 8.616 58.8542 8.616ZM62.8863 27.432C62.8863 26.856 62.7049 26.3867 62.3423 26.024C62.0009 25.6827 61.5529 25.3947 60.9983 25.16C60.4436 24.9467 59.8143 24.7653 59.1103 24.616C58.4276 24.4453 57.7449 24.2533 57.0623 24.04C56.5076 24.4667 56.1129 24.8933 55.8783 25.32C55.6436 25.7467 55.5263 26.2587 55.5263 26.856C55.5263 27.8373 55.8569 28.5947 56.5183 29.128C57.2009 29.6827 58.1503 29.96 59.3663 29.96C60.5609 29.96 61.4463 29.704 62.0223 29.192C62.5983 28.7013 62.8863 28.1147 62.8863 27.432ZM56.1023 13.864C56.1023 14.9733 56.2836 15.816 56.6463 16.392C57.0303 16.968 57.7663 17.256 58.8542 17.256C59.8996 17.256 60.6143 16.968 60.9983 16.392C61.4036 15.7947 61.6063 14.952 61.6063 13.864C61.6063 12.712 61.4036 11.8587 60.9983 11.304C60.5929 10.728 59.8783 10.44 58.8542 10.44C57.7876 10.44 57.0623 10.7173 56.6783 11.272C56.2943 11.8267 56.1023 12.6907 56.1023 13.864Z"
                            fill="#272343"></path>
                        <path
                            d="M69.6848 11.016C69.3648 10.9307 69.0661 10.824 68.7888 10.696C68.5328 10.568 68.2661 10.4187 67.9887 10.248V9H76.4048V10.216C75.9568 10.5147 75.3488 10.7813 74.5808 11.016L77.8128 19.048L78.3568 21.096H78.4208L78.9328 19.016L81.4288 11.016C80.7888 10.888 80.2021 10.632 79.6688 10.248V9H85.8448V10.248C85.3968 10.5467 84.7888 10.8027 84.0208 11.016L78.8048 25C78.2928 26.3653 77.7808 27.4747 77.2688 28.328C76.7568 29.2027 76.2448 29.896 75.7328 30.408C75.2208 30.92 74.7088 31.272 74.1968 31.464C73.6848 31.6773 73.1728 31.816 72.6608 31.88C72.4474 31.688 72.2554 31.4427 72.0848 31.144C71.9141 30.8667 71.7648 30.5573 71.6368 30.216C71.5088 29.896 71.4021 29.5653 71.3168 29.224C71.2314 28.8827 71.1781 28.5627 71.1568 28.264L71.5728 27.496H75.4768C75.6688 27.1973 75.8288 26.8773 75.9568 26.536C76.1061 26.1947 76.2768 25.6827 76.4688 25L69.6848 11.016ZM85.891 22.728C85.891 21.96 86.1363 21.3413 86.627 20.872C87.1177 20.4027 87.7683 20.168 88.579 20.168C89.3897 20.168 90.051 20.4027 90.563 20.872C91.075 21.3413 91.331 21.96 91.331 22.728C91.331 23.496 91.075 24.1147 90.563 24.584C90.051 25.032 89.3897 25.256 88.579 25.256C87.7683 25.256 87.1177 25.032 86.627 24.584C86.1363 24.1147 85.891 23.496 85.891 22.728Z"
                            fill="#FB743E"></path>
                    </svg>
                </a>
                <!-- Logo Ends Here -->

                <!-- Mobile Menu Starts Here -->
                <div class="menu-btn">
                    <div class="menu-btn-lines">

                    </div>
                </div>
                <!-- Mobile Menu Ends Here -->

                <!-- Menu Starts Here -->
                <div class="main-menu d-none d-lg-flex">
                    <ul class="main-menu-items list-unstyled">
                        <li><a href="{{ route('home') }}"
                                class="main-menu-item {{ Request::routeIs('home') ? 'active-item' : '' }}">Home</a></li>
                        <li><a href="{{ route('details') }}"
                                class="main-menu-item  {{ Request::routeIs('details') ? 'active-item' : '' }}">Details</a>
                        </li>
                        <li><a href="{{ route('search') }}"
                                class="main-menu-item  {{ Request::routeIs('search') ? 'active-item' : '' }}">Search</a>
                        </li>
                        <li><a href="{{ route('login') }}"
                                class="main-menu-item  {{ Request::routeIs('login') ? 'active-item' : '' }}">Sign In</a>
                        </li>
                        <li><a href="{{ route('register') }}"
                                class="main-menu-item  {{ Request::routeIs('register') ? 'active-item' : '' }}">Sign
                                Up</a></li>
                    </ul>
                    <form action="search.html">
                        <div class="header-searchbar">
                            <input type="text" placeholder="Search here...">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </div>
                    </form>
                </div>
                <!-- Menu Items Ends Here -->
            </div>
        </div>


        <!-- Display session messages -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

    </header>
