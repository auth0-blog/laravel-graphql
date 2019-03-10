<?php

namespace App\GraphQL\Queries;

use App\Wine;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class WineQuery extends Query
{
    protected $attributes = [
        'name' => 'wine',
    ];

    public function type()
    {
        return GraphQL::type('Wine');
    }

    public function args()
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Wine::findOrFail($args['id']);
    }
}