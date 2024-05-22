<html>

<head>
    <title>進度條 Laravel 課程範例</title>
</head>

<body>
    <header>
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-list-item"><a href="/bootstrap3/">Bootstrap3 範例</a></li>
                <li class="nav-list-item"><a href="https://progressbar.tw/courses/2">課程連結</a></li>
                <li class="nav-list-item"><a href="https://progressbar.tw">進度條官網</a></li>
                <li class="nav-list-item"><a href="https://pb.cistrend.com/htmlfinal">Github 程式</a></li>
            </ul>
            <button type="button" class="nav-button">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
        </nav>
    </header>
    <div class="container">
        @yield('content')
    </div>
    <footer>
        <div class="pb-container">
            <div class="pb-row">
                <div class="col-phone-100 col-tablet-33">
                    <div class="_container">
                        <ul class="footer-links">
                            <li>link 1</li>
                            <li>link 1</li>
                            <li>link 1</li>
                        </ul>
                    </div>
                </div>
                <div class="col-phone-100 col-tablet-33">
                    <div class="_container">
                        <ul class="footer-links">
                            <li>link 1</li>
                            <li>link 1</li>
                            <li>link 1</li>
                        </ul>
                    </div>
                </div>
                <div class="col-phone-100 col-tablet-33">
                    <div class="_container _center">
                        <div class="pb-row">
                            <div class="col-phone-100 col-phone-33">
                                <a href="https://www.facebook.com/ProgressBarTW" target="_facebook">
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-phone-100 col-phone-33">
                                <a href="https://progressbar.tw/courses/2" target="_pb">
                                    <i class="fa fa-television" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-phone-100 col-phone-33">
                                <a href="https://www.youtube.com/playlist?list=PL2SrkGHjnWcwfkYtccRowRAxWE6TakOjC"
                                    target="_youtube">
                                    <i class="fa fa-youtube" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
