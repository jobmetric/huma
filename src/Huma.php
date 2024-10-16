<?php

namespace JobMetric\Huma;

use Illuminate\Contracts\Foundation\Application;

class Huma
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected Application $app;

    /**
     * Create a new Huma instance.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
