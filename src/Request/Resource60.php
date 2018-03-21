<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ShoppingList\ShoppingListDraft;


class Resource60 extends Resource
{
    /**
     * @return Resource61
     */
    public function keyWithKeyValue($key = null): Resource61 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource61($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource62
     */
    public function withIDValue($ID = null): Resource62 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource62($this->getUri() . '/{ID}', $args);
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

}
