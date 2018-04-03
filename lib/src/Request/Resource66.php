<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Subscription\Subscription;
use Commercetools\Builder\SubscriptionUpdateBuilder;

use Commercetools\Types\Subscription\SubscriptionDraft;


class Resource66 extends Resource
{
    /**
     * @return Resource67
     */
    public function withKey($key = null): Resource67 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource67($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource68
     */
    public function withId($ID = null): Resource68 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource68($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(SubscriptionDraft $body = null): ByProjectKeySubscriptionsPost {
        $args = $this->getArgs();
        return new ByProjectKeySubscriptionsPost($args['projectKey'], $body);
    }


    /**
     * @param Subscription $subscription
     * @return SubscriptionUpdateBuilder
     */
    public function update(Subscription $subscription): SubscriptionUpdateBuilder
    {
        $builder = new SubscriptionUpdateBuilder(function(SubscriptionUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($subscription);
        if ($subscription instanceof MapperAware) {
            $builder->setMapper($subscription->getMapper());
        }
        return $builder;
    }

    /**
     * @param Subscription $subscription
     * @return ByProjectKeySubscriptionsByIDDelete
     */
    public function delete(Subscription $subscription): ByProjectKeySubscriptionsByIDDelete
    {
        return $this->withId($subscription->getId())->delete()->withVersion($subscription->getVersion());
    }

    /**
     * @param SubscriptionDraft|callable $subscriptionDraft builder function <code>
     *   function(SubscriptionDraft $subscriptionDraft): SubscriptionDraft {
     *     // modify $draft as needed
     *     return $subscriptionDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeySubscriptionsPost
     */
    public function create($subscriptionDraft): ByProjectKeySubscriptionsPost
    {
        if (is_callable($subscriptionDraft)) {
            $callback = $subscriptionDraft;
            $emptyDraft = $this->mapData(SubscriptionDraft::class, null);
            $subscriptionDraft = $callback($emptyDraft);
        }
        if (!$subscriptionDraft instanceof SubscriptionDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($subscriptionDraft);
    }
}
