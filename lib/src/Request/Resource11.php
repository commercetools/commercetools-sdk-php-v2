<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource11 extends Resource
{
    /**
     * @return ByProjectKeyCustomersPasswordTokenByPasswordTokenGet
     */
    public function get(): ByProjectKeyCustomersPasswordTokenByPasswordTokenGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersPasswordTokenByPasswordTokenGet($args['projectKey'], $args['passwordToken']);
    }

}
