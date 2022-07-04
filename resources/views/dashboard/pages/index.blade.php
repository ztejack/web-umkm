@extends('layouts.dashboard')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper ">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            {{-- @can('admin')
                <div id="dashboard" class="">
                    @include('dashboard.components.comp1', [
                        'umkms' => $umkms,
                        'users' => $users,
                    ])
                </div>
                <div id="dashboard" class="">
                    @include('dashboard.components.comp2')
                </div>
            @else
                <div id="umkm">
                    @include('dashboard.components.comp3', [
                        'umkms' => Auth::user()->umkm,
                        'koperasis' => Auth::user()->koperasi,
                    ])
                </div>
            @endcan --}}




            {{-- <div id="users" class="d-none">
                @include('dashboard.components.user', ['users' => $users])
            </div>
            <div id="umkm">
                @include('dashboard.components.umkm', ['umkms' => $umkms])
            </div> --}}
            {{-- <div id="koperasi">
                @include('dashboard.components.koperasi')
            </div> --}}


            {{-- USER --}}
            {{-- <div id="regist-umkm">
                @include('dashboard.components.registUmkm')
            </div>
            <div id="regist-koperasi">
                @include('dashboard.components.registKoperasi')
            </div> --}}


            {{-- <div id="regist-koperasi" class="">
                @include('dashboard.components.pengajuanSurat')
            </div> --}}

            <div id="website" class="">
                @include('dashboard\pages\website\index')
            </div>

        </div>
        {{-- footer --}}
        @include('dashboard.components.footer')

        <div class="content-backdrop fade"></div>
    </div>


    <!-- Content wrapper -->
@endsection
