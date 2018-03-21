<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\CustomerGroup\CustomerGroupDraft;


class Resource20 extends Resource
{
    /**
     * @return Resource21
     */
    public function keyWithKeyValue($key = null): Resource21 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource21($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource22
     */
    public function withIDValue($ID = null): Resource22 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource22($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyCustomerGroupsGet
     */
    public function get(): ByProjectKeyCustomerGroupsGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsGet($args['projectKey']);
    }
    /**
     * @param CustomerGroupDraft $body
     * @return ByProjectKeyCustomerGroupsPost
     */
    public function post(CustomerGroupDraft $body): ByProjectKeyCustomerGroupsPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomerGroupsPost($args['projectKey'], $body);
    }

}
