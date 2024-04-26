<?php

    namespace DankiCode\Controllers;

    class HomeController{

        public function index(){
            if(isset($_SESSION['login'])){
                //Rederiza a home do usuario.
                \DankiCode\Views\MainView::render('home');
            }else{
                //Rederiza para Criar conta.
                \DankiCode\Views\MainView::render('login');
            }
        }
    }

?>