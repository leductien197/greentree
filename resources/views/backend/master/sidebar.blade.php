<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
    </form>
                   <ul class="nav menu">
        <li @yield('admin') class="active"><a href="/admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Tổng quan</a></li>
        <li @yield('tree')><a href="/admin/tree"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"></use></svg> Cây</a></li>
        {{-- <li @yield('plantdisease')><a href="/admin/plantdisease"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg> Bệnh Cây</a></li> --}}
        <li @yield('news')><a href="/admin/news"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg> Bài Viết</a></li>
        {{-- <li @yield('comments')><a href="/admin/comment"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg> Bình luận</a></li> --}}
        <li role="presentation" class="divider"></li>
        {{-- <li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Quản lý thành viên</a></li> --}}

    </ul>

</div>
