<?php

if (!function_exists('svg')) {
    function svg($filename, $class = '')
    {
        $file_path = storage_path("app/public/svg/{$filename}.svg");

        if (file_exists($file_path)) {
            $svg_content = file_get_contents($file_path);
            if ($class) {
                $svg_content = str_replace('<svg ', '<svg class="' . $class . '" ', $svg_content);
            }
            return $svg_content;
        }

        return '';
    }
}
