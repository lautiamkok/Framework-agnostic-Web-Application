<?php
namespace Spectre\Core\Strategy;

use \Spectre\Core\Strategy\ModelInterface;

interface CollectionInterface
{
    public function toArray();
    public function add(ModelInterface $model, $key = null);
    public function get($key);
    public function delete($key);
}
