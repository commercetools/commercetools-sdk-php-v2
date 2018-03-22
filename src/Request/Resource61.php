<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\ShoppingList\ShoppingList;
use Commercetools\Builder\ShoppingListUpdateBuilder;

use Commercetools\Types\ShoppingList\ShoppingListDraft;


class Resource61 extends Resource
{
    /**
     * @return Resource62
     */
    public function keyWithKeyValue($key = null): Resource62 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource62($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource63
     */
    public function withIDValue($ID = null): Resource63 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource63($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyShoppingListsGet
     */
    public function get(): ByProjectKeyShoppingListsGet {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsGet($args['projectKey']);
    }
    /**
     * @param ShoppingListDraft $body
     * @return ByProjectKeyShoppingListsPost
     */
    public function post(ShoppingListDraft $body): ByProjectKeyShoppingListsPost {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsPost($args['projectKey'], $body);
    }


    public function update(ShoppingList $resource)
    {
        $builder = new ShoppingListUpdateBuilder(function (ShoppingListUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
