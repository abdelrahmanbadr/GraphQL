<?php

namespace App\GraphQL\Type;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;

/**
 * @author Hossam Magdy <hossam.magdy@aboutyou.de>
 */
class ApplicationType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Application',
        'description' => 'A user'
    ];

    /*
    * Uncomment following line to make the type input object.
    * http://graphql.org/learn/schema/#input-types
    */
    // protected $inputObject = true;

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the user'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'The name of X'
            ]
        ];
    }

    // If you want to resolve the field yourself, you can declare a method
    // with the following format resolve[FIELD_NAME]Field()
    protected function resolveNameField($root, $args)
    {
        return strtolower($root->name);
    }
}