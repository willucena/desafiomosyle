<?php

namespace MOSYLE\DI;

use Api\Database;

class Container
{
    /**
     * @param $entity
     * @return mixed
     */
    public static function getEntity($entity)
    {
        $class = "\\Api\\Entity\\".ucfirst($entity);
        return new $class(Database::getDb());
    }
}