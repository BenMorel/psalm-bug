<?php

use thiagoalessio\TesseractOCR\TesseractOCR;
use thiagoalessio\TesseractOCR\TesseractOcrException;

class Image
{
}

class Service
{
    public function store(string $hash): Image
    {
        $image = $this->tryFindByHash($hash);

        if ($image !== null) {
            return new Image();
        }

        $ocr = new TesseractOCR();

        try {
            /** @var string $ocrText */
            $ocrText = $ocr->run();
        } catch (TesseractOcrException $e) {
            $ocrText = null;
        }

        return new Image();
    }

    private function tryFindByHash(string $hash): ?Image
    {
        return null;
    }
}
