<?php
namespace Spectre\User\Mapper;

use \Spectre\Core\Strategy\GatewayInterface;
use \Spectre\Core\Mapper\Mapper as CoreMapper;

abstract class Mapper extends CoreMapper
{
    protected $gateway;
    protected $model = 'Spectre\User\Model\Model';
    protected $collection = 'Spectre\User\Model\Collection';

    public function __construct(GatewayInterface $gateway)
    {
        $this->gateway = $gateway;
    }
}
