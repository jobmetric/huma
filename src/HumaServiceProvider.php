<?php

namespace JobMetric\Huma;

use JobMetric\Huma\Providers\EventServiceProvider;
use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Panelio\RouteRegistry;

class HumaServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('huma')
            ->hasConfig()
            ->hasTranslation()
            ->registerClass('event', EventServiceProvider::class, RegisterClassTypeEnum::REGISTER())
            ->registerClass('Huma', Huma::class, RegisterClassTypeEnum::SINGLETON());
    }

    public function afterRegisterPackage(): void
    {
        RouteRegistry::addPanel($this->package);
    }

    public function afterBootPackage(): void
    {
        Panelio::addPanel('huma', [
            'name' => config('huma.panel_name'),
            'namespace' => 'JobMetric\Huma\Http\Controllers',
            'args' => [
                'description' => trans('huma::base.description'),
                'icon' => 'fas fa-user-shield',
            ],
            'permission' => 'huma',
            'position' => 0,
        ]);

        Panelio::addSection('huma', 'attendance', [
            'name' => trans('huma::base.sections.attendance.name'),
            'args' => [
                'title' => trans('huma::base.sections.attendance.title'),
                'icon' => '<i class="ki-duotone ki-fingerprint-scanning fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'huma.attendance',
            'position' => 0,
        ]);

        Panelio::addSection('huma', 'salary', [
            'name' => trans('huma::base.sections.salary.name'),
            'args' => [
                'title' => trans('huma::base.sections.salary.title'),
                'icon' => '<i class="ki-duotone ki-bank fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'huma.salary',
            'position' => 0,
        ]);

        Panelio::addSection('huma', 'feature', [
            'name' => trans('huma::base.sections.feature.name'),
            'args' => [
                'title' => trans('huma::base.sections.feature.title'),
                'icon' => '<i class="ki-duotone ki-educare fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'huma.feature',
            'position' => 0,
        ]);

        Panelio::addSection('huma', 'employee', [
            'name' => trans('huma::base.sections.employee.name'),
            'args' => [
                'title' => trans('huma::base.sections.employee.title'),
                'icon' => '<i class="ki-duotone ki-abstract-22 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'huma.employee',
            'position' => 0,
        ]);

        Panelio::addSection('huma', 'system', [
            'name' => trans('huma::base.sections.system.name'),
            'args' => [
                'title' => trans('huma::base.sections.system.title'),
                'icon' => '<i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'huma.system',
            'position' => 0,
        ]);

        Panelio::addSection('huma', 'report', [
            'name' => trans('huma::base.sections.report.name'),
            'args' => [
                'title' => trans('huma::base.sections.report.title'),
                'icon' => '<i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'huma.report',
            'position' => 0,
        ]);
    }
}
