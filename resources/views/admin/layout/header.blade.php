@section('header')
<div class="mdk-header js-mdk-header bg-primary" data-fixed>
    <div class="mdk-header__content">

        <nav class="navbar navbar-expand-md bg-primary navbar-dark d-flex-none">
            <button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
                <i class="material-icons align-middle md-36">short_text</i>
            </button>
            {{-- <div class="page-title m-0">Hãng Sản Xuất</div> --}}

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item nav-divider">
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="sidebar" data-target="#user-drawer">
                                <b>{{Auth::guard('admin')->user()->username}}</b>
                                <img src="{{asset('backend/images/empty.png')}}" class="img-fluid rounded-circle ml-1" width="35" alt="">
                            </a>
                        </li>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
    
@endsection