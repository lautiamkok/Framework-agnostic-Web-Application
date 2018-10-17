<?php
// Tell the container how to construct Foo.
$container->add('Spectre\Core\Foo', function() {
    return new \Spectre\Core\Foo(20, 40);
});
