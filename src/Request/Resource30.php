<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Inventory\InventoryEntryUpdate;



class Resource30 extends Resource
{
    /**
     * @return ByProjectKeyInventoryByIDGet
     */
    public function get(): ByProjectKeyInventoryByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyInventoryByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param InventoryEntryUpdate $body
     * @return ByProjectKeyInventoryByIDPost
     */
    public function post(InventoryEntryUpdate $body): ByProjectKeyInventoryByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyInventoryByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyInventoryByIDDelete
     */
    public function delete(): ByProjectKeyInventoryByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyInventoryByIDDelete($args['projectKey'], $args['ID']);
    }

}
