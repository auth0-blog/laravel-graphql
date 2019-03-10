<?php

namespace App\GraphQL\Queries;

use App\Wine;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class WinesQuery extends Query
{
    protected $attributes = [
        'name' => 'wines',
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Wine'));
    }

    public function resolve($root, $args)
    {
        return Wine::all();
    }
}