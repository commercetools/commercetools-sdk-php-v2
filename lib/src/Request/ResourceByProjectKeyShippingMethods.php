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
use Commercetools\Types\ShippingMethod\ShippingMethod;
use Commercetools\Builder\ShippingMethodUpdateBuilder;

use Commercetools\Types\ShippingMethod\ShippingMethodDraft;


class ResourceByProjectKeyShippingMethods extends Resource
{
    /**
     * @return ResourceByProjectKeyShippingMethodsKeyByKey
     */
    public function withKey($key = null): ResourceByProjectKeyShippingMethodsKeyByKey {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyShippingMethodsKeyByKey($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyShippingMethodsByID
     */
    public function withId($ID = null): ResourceByProjectKeyShippingMethodsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyShippingMethodsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
    }


    /**
     * @return ByProjectKeyShippingMethodsGet
     */
    public function get(): ByProjectKeyShippingMethodsGet {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsGet($args['projectKey']);
    }
    /**
     * @param ShippingMethodDraft $body
     * @return ByProjectKeyShippingMethodsPost
     */
    public function post(ShippingMethodDraft $body = null): ByProjectKeyShippingMethodsPost {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsPost($args['projectKey'], $body);
    }


    /**
     * @param ShippingMethod $shippingMethod
     * @return ShippingMethodUpdateBuilder
     */
    public function update(ShippingMethod $shippingMethod): ShippingMethodUpdateBuilder
    {
        $builder = new ShippingMethodUpdateBuilder(function(ShippingMethodUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($shippingMethod);
        if ($shippingMethod instanceof MapperAware) {
            $builder->setMapper($shippingMethod->getMapper());
        }
        return $builder;
    }

    /**
     * @param ShippingMethod $shippingMethod
     * @return ByProjectKeyShippingMethodsByIDDelete
     */
    public function delete(ShippingMethod $shippingMethod): ByProjectKeyShippingMethodsByIDDelete
    {
        return $this->withId($shippingMethod->getId())->delete()->withVersion($shippingMethod->getVersion());
    }

    /**
     * @param ShippingMethodDraft|callable $shippingMethodDraft builder function <code>
     *   function(ShippingMethodDraft $shippingMethodDraft): ShippingMethodDraft {
     *     // modify $draft as needed
     *     return $shippingMethodDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyShippingMethodsPost
     */
    public function create($shippingMethodDraft): ByProjectKeyShippingMethodsPost
    {
        if (is_callable($shippingMethodDraft)) {
            $callback = $shippingMethodDraft;
            $emptyDraft = $this->mapData(ShippingMethodDraft::class, null);
            $shippingMethodDraft = $callback($emptyDraft);
        }
        if (!$shippingMethodDraft instanceof ShippingMethodDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($shippingMethodDraft);
    }
}
