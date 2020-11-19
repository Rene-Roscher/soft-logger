<?php

namespace RServices\SoftLogger;

class SoftLogger
{

    public function log($content, $file = 'logger.log', $type = 'ERROR'): void
    {
        if (is_array($content))
            $content = json_encode($content);
        $time = "[".date('Y-m-d H:i:s')."] [$type]";
        if (file_exists($path = log_path($file)))
            $content = file_get_contents($path)."\n$time $content";
        file_put_contents($path, $content);
    }

}
