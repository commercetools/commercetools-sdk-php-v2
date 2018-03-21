<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource77 extends Resource
{
    /**
     * @param $body
     * @return ByProjectKeyMeEmailConfirmPost
     */
    public function post($body): ByProjectKeyMeEmailConfirmPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeEmailConfirmPost($args['projectKey'], $body);
    }

}
