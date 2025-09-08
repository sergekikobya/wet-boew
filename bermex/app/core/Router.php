<?php
namespace App\Core;

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function get(string $pattern, callable $handler): void
    {
        $this->routes['GET'][$pattern] = $handler;
    }

    public function post(string $pattern, callable $handler): void
    {
        $this->routes['POST'][$pattern] = $handler;
    }

    public function dispatch(string $method, string $uri)
    {
        $path = parse_url($uri, PHP_URL_PATH) ?? '/';
        $path = rtrim($path, '/') ?: '/';

        foreach ($this->routes[$method] ?? [] as $pattern => $handler) {
            $regex = '#^' . preg_replace('#\{([a-zA-Z_][a-zA-Z0-9_]*)\}#', '(?P<$1>[^/]+)', rtrim($pattern, '/') ?: '/') . '$#';
            if (preg_match($regex, $path, $matches)) {
                $params = [];
                foreach ($matches as $key => $value) {
                    if (is_string($key)) {
                        $params[$key] = $value;
                    }
                }
                return $handler($params);
            }
        }

        http_response_code(404);
        echo '404 - Not Found';
        return null;
    }
}

