@extends('panelio::layout.layout')

@section('body')
    <div class="row gy-5 g-xl-10">
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('huma::base.dashboard.tiles.employees') }}" number="61">
                <i class="ki-duotone ki-compass fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('huma::base.dashboard.tiles.departments') }}" number="5">
                <i class="ki-duotone ki-chart-simple fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('huma::base.dashboard.tiles.today_attendees') }}" number="50">
                <i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-xl-10">
            <x-tile-statistics name="{{ trans('huma::base.dashboard.tiles.absent_today') }}" number="2">
                <i class="ki-duotone ki-map fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <x-tile-statistics name="{{ trans('huma::base.dashboard.tiles.person_on_leave') }}" number="9">
                <i class="ki-duotone ki-abstract-35 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
        <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
            <x-tile-statistics name="{{ trans('huma::base.dashboard.tiles.total_salary') }}" number="599999999">
                <i class="ki-duotone ki-abstract-26 fs-2hx text-gray-600">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </x-tile-statistics>
        </div>
    </div>
@endsection
