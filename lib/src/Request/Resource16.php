<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerChangePassword;


class Resource16 extends Resource
{
    /**
     * @return Resource17
     */
    public function reset(): Resource17 {
        return new Resource17($this->getUri() . '/reset', $this->getArgs(), $this->getMapper());
    }


    /**
     * @param CustomerChangePassword $body
     * @return ByProjectKeyCustomersPasswordPost
     */
    public function post(CustomerChangePassword $body): ByProjectKeyCustomersPasswordPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersPasswordPost($args['projectKey'], $body);
    }

}
