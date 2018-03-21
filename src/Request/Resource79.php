<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class Resource79 extends Resource
{
    /**
     * @param $body
     * @return ByProjectKeyMePasswordResetPost
     */
    public function post($body): ByProjectKeyMePasswordResetPost {
        $args = $this->getArgs();
        return new ByProjectKeyMePasswordResetPost($args['projectKey'], $body);
    }

}
