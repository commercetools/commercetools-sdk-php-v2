<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerChangePassword;


class ResourceByProjectKeyCustomersPassword extends Resource
{
    /**
     * @return ResourceByProjectKeyCustomersPasswordReset
     */
    public function reset(): ResourceByProjectKeyCustomersPasswordReset {
        return new ResourceByProjectKeyCustomersPasswordReset($this->getUri() . '/reset', $this->getArgs(), $this->getMapper());
    }


    /**
     * @param CustomerChangePassword $body
     * @return ByProjectKeyCustomersPasswordPost
     */
    public function post(CustomerChangePassword $body = null): ByProjectKeyCustomersPasswordPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersPasswordPost($args['projectKey'], $body);
    }

}
