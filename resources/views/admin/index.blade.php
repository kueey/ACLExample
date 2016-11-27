

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">后台首页</div>

                <div class="panel-body">
                    后台首页
                </div>

                <a href="{{ route('test.admin') }}">继续链接</a>
            </div>
        </div>

        <span>{{ Auth::guard('admin')->user()->name }}</span>
        <a href="{{ url('admin/logout') }}">退出</a>
    </div>
</div>

