<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Me\MyCustomerDraft;


class ResourceByProjectKeyMeSignup extends Resource
{
    /**
     * @param MyCustomerDraft $body
     * @return ByProjectKeyMeSignupPost
     */
    public function post(MyCustomerDraft $body = null): ByProjectKeyMeSignupPost {
        $args = $this->getArgs();
        return new ByProjectKeyMeSignupPost($args['projectKey'], $body);
    }

}
