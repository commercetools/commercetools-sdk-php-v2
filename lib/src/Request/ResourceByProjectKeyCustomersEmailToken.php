<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerCreateEmailToken;


class ResourceByProjectKeyCustomersEmailToken extends Resource
{
    /**
     * @param CustomerCreateEmailToken $body
     * @return ByProjectKeyCustomersEmailTokenPost
     */
    public function post(CustomerCreateEmailToken $body = null): ByProjectKeyCustomersEmailTokenPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersEmailTokenPost($args['projectKey'], $body);
    }

}
