<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * Caso o controller possua apenas uma função, é só chamar a classe "self::class"
     * fora do array informado na rota.
     *
     * Isso vai chamar o método magico __invoke... Basicamente isso
     */
    public function __invoke()
    {
        return $this->randomInformationAboutMe();
    }

    public function randomInformationFramework(): string
    {
        return "Laravel é muito interessante kkajk";
    }

    public function randomInformationAboutMe(): string
    {
        return "Acho que vou apanhar lindamente até aprender kjaksj";
    }
}
