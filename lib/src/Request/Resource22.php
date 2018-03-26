<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\CustomerGroup\CustomerGroupUpdate;



class Resource22 extends Resource
{
    /**
     * @return ByProjectKeyCustomerGroupsByIDGet
     */
    public function get(): ByProjectKeyCustomerGroupsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param CustomerGroupUpdate $body
     * @return ByProjectKeyCustomerGroupsByIDPost
     */
    public function post(CustomerGroupUpdate $body = null): ByProjectKeyCustomerGroupsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyCustomerGroupsByIDDelete
     */
    public function delete(): ByProjectKeyCustomerGroupsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsByIDDelete($args['projectKey'], $args['ID']);
    }

}
