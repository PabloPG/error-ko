<?php defined('SYSPATH') or die('No direct script access.');

class HTTP_Exception_500 extends Kohana_HTTP_Exception_500 {

    /**
     * Generate a Response for the 500 Exception.
     *
     * The user should be shown a nice 500 page.
     *
     * @return Response
     */
    public function get_response()
    {
        // Verifica se esta na pagina de desenvolvimento
        if (Kohana::$environment >= Kohana::DEVELOPMENT) {
            // Show the normal Kohana error page.
            return parent::get_response();
        }
        else {

            // Instancia página
            $view = View::factory('template');

            // Seta o titulo da página
            $view->title = $this->getCode().' &ldquo;'.$this->getMessage().'&rdquo;';

            // Set a mensagem
            $view->message = $this->getCode().' &ldquo;'.$this->getMessage().'&rdquo;';

            // Set a pagina que tentou acessar
            $view->page = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

            // Executa passando o status 500
            $response = Response::factory()
                ->status(500)
                ->body($view->render());

            return $response;
        }
    }
}