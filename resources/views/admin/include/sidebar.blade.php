<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الاجنس </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{App\Models\Agent::count()}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.agent')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.agent.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> المدينه </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{App\Models\City::count()}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.city')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.city.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الالوان </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{App\Models\Color::count()}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.color')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.color.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> النوع </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{App\Models\Type::count()}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.type')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.type.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> التصنيف </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{App\Models\Category::count()}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.category')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.category.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> السلندر </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{App\Models\Slnder::count()}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.slnder')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.slnder.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href=""><i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الشركه </span>
                    <span class="badge badge badge-info badge-pill float-right mr-2">
                        {{App\Models\Brand::count()}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{route('admin.brand')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li><a class="menu-item" href="{{route('admin.brand.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
