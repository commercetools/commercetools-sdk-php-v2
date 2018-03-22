<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Base\MapperAware;
use Commercetools\Types\Cart\Cart;
use Commercetools\Builder\CartUpdateBuilder;

use Commercetools\Types\Cart\CartDraft;


class Resource4 extends Resource
{
    /**
     * @return Resource5
     */
    public function withIDValue($ID = null): Resource5 {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new Resource5($this->getUri() . '/{ID}', $args);
    }


    /**
     * @return ByProjectKeyCartsGet
     */
    public function get(): ByProjectKeyCartsGet {
        $args = $this->getArgs();
        return new ByProjectKeyCartsGet($args['projectKey']);
    }
    /**
     * @param CartDraft $body
     * @return ByProjectKeyCartsPost
     */
    public function post(CartDraft $body): ByProjectKeyCartsPost {
        $args = $this->getArgs();
        return new ByProjectKeyCartsPost($args['projectKey'], $body);
    }


    public function update(Cart $resource)
    {
        $builder = new CartUpdateBuilder(function (CartUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($resource);
        if ($resource instanceof MapperAware) {
            $builder->setMapper($resource->getMapper());
        }
        return $builder;
    }
}
