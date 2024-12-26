<?php

namespace App;

class Controller
{
    public function render(string $view, array $data = [])
    {
        extract($data);
        $viewPath = __DIR__ . "/Views/{$view}.php";

        if (file_exists($viewPath)) {
            ob_start();
            include $viewPath;
            $content = ob_get_clean();

            include __DIR__ . '/Views/layout.php';
        } else {
            throw new \Exception("A view {$view} não foi encontrada.");
        }
    }
}
