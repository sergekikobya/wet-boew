<?php
namespace App\Core;

class Controller
{
    protected function render(string $view, array $params = [], string $layout = 'main'): void
    {
        extract($params, EXTR_SKIP);
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        $layoutFile = __DIR__ . '/../views/layouts/' . $layout . '.php';

        if (!is_file($viewFile)) {
            http_response_code(404);
            echo 'View not found: ' . htmlspecialchars($view);
            return;
        }

        ob_start();
        include $viewFile;
        $content = ob_get_clean();

        if (is_file($layoutFile)) {
            include $layoutFile;
        } else {
            echo $content;
        }
    }
}

