<?php
    namespace App\Http\Controllers;

    class ControllerMachine
    {
        public function index()
        {
            echo "<h1>Listar</h1>";
        }

        public function show($id)
        {
            echo "<h1>Visualizar machine $id </h1>";
        }
    }