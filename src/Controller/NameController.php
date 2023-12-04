<?php

namespace Converter\ConverterBundle\Controller;

use Ufo\JsonRpcBundle\ApiMethod\Interfaces\IRpcService;

class NameController implements IRpcService
{
    public function shortName(array $params = [])
    {
        return 'Работает';
    }
}