<?php

//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GreetingsController
{
    public function helloAction($name, GreetingsRepository $greetingsRepository) //, Request $request)
    {
//        var_dump($request->attributes);

        return new Response(sprintf("%s, %s",
            $greetingsRepository->getHelloGreeting(),
            isset($name) ? $name : 'World'
        ));
    }

    public function byeAction()
    {
        return new Response('bye');
    }
}