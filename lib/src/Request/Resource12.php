<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource12 extends Resource
{
    /**
     * @return ByProjectKeyCustomersEmailTokenByEmailTokenGet
     */
    public function get(): ByProjectKeyCustomersEmailTokenByEmailTokenGet {
        $args = $this->getArgs();
        return new ByProjectKeyCustomersEmailTokenByEmailTokenGet($args['emailToken'], $args['projectKey']);
    }

}
