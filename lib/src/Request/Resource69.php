<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Subscription\SubscriptionUpdate;



class Resource69 extends Resource
{
    /**
     * @return ByProjectKeySubscriptionsByIDGet
     */
    public function get(): ByProjectKeySubscriptionsByIDGet {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsByIDGet($args['projectKey'], $args['ID']);
    }
    /**
     * @param SubscriptionUpdate $body
     * @return ByProjectKeySubscriptionsByIDPost
     */
    public function post(SubscriptionUpdate $body = null): ByProjectKeySubscriptionsByIDPost {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsByIDPost($args['projectKey'], $args['ID'], $body);
    }
    /**
     * @return ByProjectKeySubscriptionsByIDDelete
     */
    public function delete(): ByProjectKeySubscriptionsByIDDelete {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsByIDDelete($args['projectKey'], $args['ID']);
    }

}
