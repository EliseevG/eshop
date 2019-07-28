<?php


class Router 
{
      
      private $routes;

      public function __construct()
      {
          $routesPath = ROOT.'/application/config/routes.php';
          $this->routes = include($routesPath);
      }

      // Возваращает URI
      private function getURI()
      {
        if (!empty($_SERVER['REQUEST_URI'])) 
        {
          return trim($_SERVER['REQUEST_URI'], '/');
        }
      }


      // инициализация

      public function run()
      {
        // получить строку запроса
        $uri = $this->getURI();

        // проверить наличие такого запроса
        foreach ($this->routes as $uriPattern => $path) {

          // проверить наличие такого запроса
          if (preg_match("~$uriPattern~", $uri))
          {
            //  Получить внутренний путь из внешнего согласно правилу
            $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
            
            // Определение контроллера,
            // action'а и параметра

            $segments = explode('/', $internalRoute);
            
            $controllerName = array_shift($segments).'Controller';

            $controllerName = ucfirst($controllerName);

            $actionName = 'action'.ucfirst(array_shift($segments));

            $parameters = $segments;

            // Подключить файл класса-контроллера
            $controllerFile = ROOT . '/application/controllers/' . $controllerName . '.php';

            if (file_exists($controllerFile)) 
            {
              include_once($controllerFile);
            }  

            // Создать объект, вызвать метод
            $controllerObject = new $controllerName;
            $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
            if ($result !=null) 
            {
              break;
            }  
          }
        }

        
        
      }
    
}