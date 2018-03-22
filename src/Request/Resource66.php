<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Subscription\Subscription;
use Commercetools\Builder\SubscriptionUpdateBuilder;

use Commercetools\Types\Subscription\SubscriptionDraft;


class Resource66 extends Resource
{
    /**
     * @return Resource67
     */
    public function keyWithKeyValue($key = null): Resource67 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource67($this->getUri() . '/key={key}', $args);
    }
    /**
     * @return Resource68
     */
    public function withIDValue($ID = null): Resource68 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource68($this->getUri() . '/{ID}', $args);
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


    public function update(Subscription $resource)
    {
        $builder = new SubscriptionUpdateBuilder(function (SubscriptionUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
