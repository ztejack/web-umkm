<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="../" class="app-brand-link">
            <span class="app-brand-logo demo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.75 105.54">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #566a7f;
                            }

                            .cls-2 {
                                fill: #696cff;
                            }
                        </style>
                    </defs>
                    <title>Asset 1</title>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="OBJECTS">
                            <path class="cls-1"
                                d="M44.56,60.88c-6.79,0-13.67-1.24-19-5.79q-6.88-5.88-6.87-16.27T25.61,22.5q6.86-5.94,19-5.93H64.49a1.66,1.66,0,0,0,1.64-1.66h0a1.66,1.66,0,0,0-1.64-1.65H62.65A1.66,1.66,0,0,1,61,11.6h0A1.66,1.66,0,0,1,62.65,10h4.09a1.65,1.65,0,0,0,1.64-1.67h0a1.65,1.65,0,0,0-1.64-1.66H60.53A1.65,1.65,0,0,1,58.9,5h0a1.66,1.66,0,0,1,1.63-1.66H71.31A1.64,1.64,0,0,0,73,1.66h0A1.65,1.65,0,0,0,71.31,0H46.38Q24.63,0,12.32,10.38T0,38.82A37.49,37.49,0,0,0,4.87,58a37.77,37.77,0,0,0,14.3,13.79,39.9,39.9,0,0,0,11.65,4.47,70.43,70.43,0,0,0,13.74,1.26c11.46,0,12.68-16.33,0-16.66Z" />
                            <path class="cls-2"
                                d="M40.19,44.68c6.79,0,13.67,1.24,19,5.79Q66,56.35,66,66.73T59.14,83.05q-6.84,6-19,5.94H20.26a1.65,1.65,0,0,0-1.64,1.66h0a1.64,1.64,0,0,0,1.64,1.65h1.82A1.65,1.65,0,0,1,23.72,94h0a1.64,1.64,0,0,1-1.64,1.65H18a1.65,1.65,0,0,0-1.64,1.66h0A1.64,1.64,0,0,0,18,98.92H24.2a1.65,1.65,0,0,1,1.64,1.66h0a1.64,1.64,0,0,1-1.64,1.65H13.42a1.66,1.66,0,0,0-1.63,1.66h0a1.65,1.65,0,0,0,1.63,1.65H38.35q21.75,0,34.09-10.38T84.75,66.73a37.56,37.56,0,0,0-4.88-19.19,37.93,37.93,0,0,0-14.3-13.8,40.23,40.23,0,0,0-11.66-4.46A70.13,70.13,0,0,0,40.19,28c-11.45,0-12.7,16.34,0,16.67Z" />
                        </g>
                    </g>
                </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">SIBADU</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    @can('admin')
        {{-- Admin --}}
        @include('dashboard.components.menuAdmin')
    @else
        {{-- User --}}
        @include('dashboard.components.menuUser')
    @endcan


</aside>
