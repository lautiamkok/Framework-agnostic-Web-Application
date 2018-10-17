<?php
namespace Spectre\Core\Strategy;

interface ModelInterface
{
    public function setOptions(array $params);
    public function toArray();
}
