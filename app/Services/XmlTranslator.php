<?php
namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class XmlTranslator
{
    public function loadTranslations($locale)
    {
        $xmlPath = resource_path("lang/{$locale}/messages.xml");

        if (file_exists($xmlPath)) {
            $xml = simplexml_load_file($xmlPath);

            $translations = [];

            foreach ($xml->message as $message) {
                $key = (string) $message['key'];
                $value = (string) $message;
                $translations[$key] = $value;
            }

            // Déclarations de débogage

            return $translations;
        }

        return [];
    }
}
