<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Subscription\SubscriptionUpdate;



class Resource67 extends Resource
{
    /**
     * @return ByProjectKeySubscriptionsKeyByKeyGet
     */
    public function get(): ByProjectKeySubscriptionsKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param SubscriptionUpdate $body
     * @return ByProjectKeySubscriptionsKeyByKeyPost
     */
    public function post(SubscriptionUpdate $body): ByProjectKeySubscriptionsKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeySubscriptionsKeyByKeyDelete
     */
    public function delete(): ByProjectKeySubscriptionsKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}
