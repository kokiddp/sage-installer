<?php

namespace Roots\Sage\Installer\Presets;

class Bootstrap5 extends Preset
{
    /** {@inheritdoc} */
    protected function updatePackagesArray(array $packages)
    {
        $packages['dependencies']['bootstrap'] = 'v5.3.0';
        $packages['dependencies']['@popperjs/core'] = '^2.11.7';
        return $packages;
    }
}
