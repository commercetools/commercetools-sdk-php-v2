<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\ShippingMethod\ShippingMethod;
use Commercetools\Builder\ShippingMethodUpdateBuilder;

use Commercetools\Types\ShippingMethod\ShippingMethodDraft;


class Resource58 extends Resource
{
    /**
     * @return Resource59
     */
    public function keyWithKeyValue($key = null): Resource59 {
        $args = array_merge($this->getArgs(), array_filter(['key' => $key], function($value) { return !is_null($value); }));
        return new Resource59($this->getUri() . '/key={key}', $args, $this->getMapper());
    }
    /**
     * @return Resource60
     */
    public function withIDValue($ID = null): Resource60 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource60($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(ShippingMethodDraft $body): ByProjectKeyShippingMethodsPost {
        $args = $this->getArgs();
        return new ByProjectKeyShippingMethodsPost($args['projectKey'], $body);
    }


    public function update(ShippingMethod $shippingMethod)
    {
        $builder = new ShippingMethodUpdateBuilder(function (ShippingMethodUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($shippingMethod);
        if ($shippingMethod instanceof MapperAware) {
            $builder->setMapper($shippingMethod->getMapper());
        }
        return $builder;
    }

    public function delete(ShippingMethod $shippingMethod)
    {
        return $this->withIDValue($shippingMethod->getId())->delete()->withVersion($shippingMethod->getVersion());
    }

    /**
     * @param ShippingMethodDraft|callable $shippingMethodDraftDraft builder function <code>
     *   function (ShippingMethodDraft $shippingMethodDraft): ShippingMethodDraft {
     *     // modify $draft as needed
     *     return $shippingMethodDraft;
     *   }
     *   </code>
     */
    public function create($shippingMethodDraft)
    {
        if (is_callable($shippingMethodDraft)) {
            $callback = $shippingMethodDraft;
            $emptyDraft = $this->mapData(ShippingMethodDraft::class, null);
            $shippingMethodDraft = $callback($emptyDraft);
        }
        if (!$shippingMethodDraft instanceof ShippingMethodDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($shippingMethodDraft);
    }
}
