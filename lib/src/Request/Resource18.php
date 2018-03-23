<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerCreatePasswordResetToken;


class Resource18 extends Resource
{
    /**
     * @param CustomerCreatePasswordResetToken $body
     * @return ByProjectKeyCustomersPasswordTokenPost
     */
    public function post(CustomerCreatePasswordResetToken $body): ByProjectKeyCustomersPasswordTokenPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersPasswordTokenPost($args['projectKey'], $body);
    }

}
