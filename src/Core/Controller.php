<?php
namespace App\Core;

abstract class Controller
{
    protected function render(string $view, array $data = [], $layout = 'layout'): void
    {
        extract($data);

        ob_start();

        $viewFile = __DIR__ . '/../../src/View/' . $view . '.php';
        if (file_exists($viewFile)) {
            require $viewFile;
        } else {
            echo "Vue introuvable : $view";
        }

        $content = ob_get_clean();

        if ($layout !== false) {
            $layoutFile = __DIR__ . '/../../src/View/' . $layout . '.php';
            if (file_exists($layoutFile)) {
                require $layoutFile;
            } else {
                echo $content;
            }
        } else {
            echo $content;
        }
    }

    protected function e($string): string
    {
        return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
    }
}