<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;

class ResourceByProjectKeyMePassword extends Resource
{
    /**
     * @return ResourceByProjectKeyMePasswordReset
     */
    public function reset(): ResourceByProjectKeyMePasswordReset {
        return new ResourceByProjectKeyMePasswordReset($this->getUri() . '/reset', $this->getArgs(), $this->getMapper());
    }


    /**
     * @param $body
     * @return ByProjectKeyMePasswordPost
     */
    public function post($body = null): ByProjectKeyMePasswordPost {
        $args = $this->getArgs();
        return new ByProjectKeyMePasswordPost($args['projectKey'], $body);
    }

}
