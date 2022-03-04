<?php

if (! function_exists('docker_path')) {
    /**
     * Get the path to the base of the docker folder.
     *
     * @param  string  $path
     * @return string
     */
    function docker_path($path = '') {
        return app()->basePath('docker' . ($path != '' ? DIRECTORY_SEPARATOR.$path : ''));
    }
}

if (! function_exists('docker_environment_path')) {
    /**
     * Get the path to the base of the docker specific environment folder.
     *
     * @param  string  $path
     * @return string
     */
    function docker_environment_path($environment = null, $path = '') {
        if (is_null($environment)) {
            $environment = config('app.env');
        }
        return docker_path('environments' . DIRECTORY_SEPARATOR . $environment . ($path != '' ? DIRECTORY_SEPARATOR.$path : ''));
    }
}

if (! function_exists('docker_common_path')) {
    /**
     * Get the path to the base of the docker specific environment folder.
     *
     * @param  string  $path
     * @return string
     */
    function docker_common_path($path = '') {
        return docker_path('common' . ($path != '' ? DIRECTORY_SEPARATOR.$path : ''));
    }
}
