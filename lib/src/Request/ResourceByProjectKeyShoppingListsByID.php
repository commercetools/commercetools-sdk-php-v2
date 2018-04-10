<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\ShoppingList\ShoppingListUpdate;



class ResourceByProjectKeyShoppingListsByID extends Resource
{
    /**
     * @return ByProjectKeyShoppingListsByIDGet
     */
    public function get(): ByProjectKeyShoppingListsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param ShoppingListUpdate $body
     * @return ByProjectKeyShoppingListsByIDPost
     */
    public function post(ShoppingListUpdate $body = null): ByProjectKeyShoppingListsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyShoppingListsByIDDelete
     */
    public function delete(): ByProjectKeyShoppingListsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyShoppingListsByIDDelete($args['projectKey'], $args['ID']);
    }

}
