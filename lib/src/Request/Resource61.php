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
    public function withKey($key = null): Resource62 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource62($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource63
     */
    public function withId($ID = null): Resource63 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource63($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(ShoppingListDraft $body = null): ByProjectKeyShoppingListsPost {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsPost($args['projectKey'], $body);
    }


    public function update(ShoppingList $shoppingList)
    {
        $builder = new ShoppingListUpdateBuilder(function(ShoppingListUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($shoppingList);
        if ($shoppingList instanceof MapperAware) {
            $builder->setMapper($shoppingList->getMapper());
        }
        return $builder;
    }

    public function delete(ShoppingList $shoppingList)
    {
        return $this->withIDValue($shoppingList->getId())->delete()->withVersion($shoppingList->getVersion());
    }

    /**
     * @param ShoppingListDraft|callable $shoppingListDraftDraft builder function <code>
     *   function(ShoppingListDraft $shoppingListDraft): ShoppingListDraft {
     *     // modify $draft as needed
     *     return $shoppingListDraft;
     *   }
     *   </code>
     */
    public function create($shoppingListDraft)
    {
        if (is_callable($shoppingListDraft)) {
            $callback = $shoppingListDraft;
            $emptyDraft = $this->mapData(ShoppingListDraft::class, null);
            $shoppingListDraft = $callback($emptyDraft);
        }
        if (!$shoppingListDraft instanceof ShoppingListDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($shoppingListDraft);
    }
}
