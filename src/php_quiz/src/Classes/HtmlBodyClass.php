<?php 

namespace App\Classes;

class HtmlBodyClass{


    public function htmlHeader()
    {
        return <<<HTML
        <html>
        <body>
        <div class="container mt-3 ">
        <div class="d-flex align-items-center justify-content-center vh-100">
        HTML;
    }

    public function htmlFooter(){
        return <<<HTML
        </div>
        </div>
        <script src="/js/script.js" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js defer" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        </body>
        </html>
        HTML;
    }


}