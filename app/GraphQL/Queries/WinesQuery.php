<?php

namespace App\GraphQL\Queries;

use GraphQL;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use GraphQL\Type\Definition\Type;
use App\Wine;

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