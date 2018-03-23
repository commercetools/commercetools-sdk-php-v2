<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Customer\CustomerEmailVerify;


class Resource15 extends Resource
{
    /**
     * @param CustomerEmailVerify $body
     * @return ByProjectKeyCustomersEmailConfirmPost
     */
    public function post(CustomerEmailVerify $body): ByProjectKeyCustomersEmailConfirmPost {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersEmailConfirmPost($args['projectKey'], $body);
    }

}
