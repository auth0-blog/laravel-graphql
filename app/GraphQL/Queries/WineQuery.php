<?php

namespace App\GraphQL\Queries;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;
use Rebing\GraphQL\Support\SelectFields;
use App\Wine;

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