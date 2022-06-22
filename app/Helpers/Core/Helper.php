<?php

namespace App\Helpers\Core;

use Illuminate\Support\Arr;
use ReflectionClass;
use ReflectionException;

class Helper
{
    /**
     * @param $class
     * @return string
     */
    public static function getResourceName($class): string
    {
        try {
            return (new ReflectionClass($class))->getShortName();
        } catch (ReflectionException $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * @param $request
     * @param $key
     * @return bool
     */
    public static function checkIfNotNull($request, $key): bool
    {
        return (Arr::has($request, $key) && !is_null(Arr::get($request, $key)));
    }

    /**
     * @param $request
     * @param $key
     * @return bool
     */
    public static function checkIfTrue($request, $key): bool
    {
        return (Arr::has($request, $key) && (bool)Arr::get($request, $key) === true);
    }

    /**
     * Loops through a folder and requires all PHP files
     * Searches sub-directories as well.
     *
     * @param $folder
     */
    public static function includeRouteFiles($folder)
    {
        $directory = $folder;
        $handle = opendir($directory);
        $directory_list = [$directory];

        while (false !== ($filename = readdir($handle))) {
            if ($filename != '.' && $filename != '..' && is_dir($directory.$filename)) {
                array_push($directory_list, $directory.$filename.'/');
            }
        }

        foreach ($directory_list as $directory) {
            foreach (glob($directory.'*.php') as $filename) {
                require $filename;
            }
        }
    }
}
