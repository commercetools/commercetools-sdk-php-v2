<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ShoppingList\ShoppingListUpdate;



class ResourceByProjectKeyShoppingListsKeyByKey extends Resource
{
    /**
     * @return ByProjectKeyShoppingListsKeyByKeyGet
     */
    public function get(): ByProjectKeyShoppingListsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param ShoppingListUpdate $body
     * @return ByProjectKeyShoppingListsKeyByKeyPost
     */
    public function post(ShoppingListUpdate $body = null): ByProjectKeyShoppingListsKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyShoppingListsKeyByKeyDelete
     */
    public function delete(): ByProjectKeyShoppingListsKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
