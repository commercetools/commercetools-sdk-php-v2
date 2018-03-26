<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerUpdate;



class Resource19 extends Resource
{
    /**
     * @return ByProjectKeyCustomersByIDGet
     */
    public function get(): ByProjectKeyCustomersByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param CustomerUpdate $body
     * @return ByProjectKeyCustomersByIDPost
     */
    public function post(CustomerUpdate $body = null): ByProjectKeyCustomersByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeyCustomersByIDDelete
     */
    public function delete(): ByProjectKeyCustomersByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersByIDDelete($args['projectKey'], $args['ID']);
    }

}
