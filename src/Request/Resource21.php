<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Update;



class Resource21 extends Resource
{
    /**
     * @return ByProjectKeyCustomerGroupsKeyByKeyGet
     */
    public function get(): ByProjectKeyCustomerGroupsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param Update $body
     * @return ByProjectKeyCustomerGroupsKeyByKeyPost
     */
    public function post(Update $body): ByProjectKeyCustomerGroupsKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyCustomerGroupsKeyByKeyDelete
     */
    public function delete(): ByProjectKeyCustomerGroupsKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
