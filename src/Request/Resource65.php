<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Subscription\SubscriptionDraft;


class Resource65 extends Resource
{
    /**
     * @return Resource66
     */
    public function keyWithKeyValue($key = null): Resource66 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource66($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource67
     */
    public function withIDValue($ID = null): Resource67 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource67($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeySubscriptionsGet
     */
    public function get(): ByProjectKeySubscriptionsGet {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsGet($args['projectKey']);
    }
    /**
     * @param SubscriptionDraft $body
     * @return ByProjectKeySubscriptionsPost
     */
    public function post(SubscriptionDraft $body): ByProjectKeySubscriptionsPost {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsPost($args['projectKey'], $body);
    }

}
