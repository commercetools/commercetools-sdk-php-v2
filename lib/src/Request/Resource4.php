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
        return new Resource5($this->getUri() . '/{ID}', $args, $this->getMapper());
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
    public function post(CartDraft $body = null): ByProjectKeyCartsPost {
        $args = $this->getArgs();
        return new ByProjectKeyCartsPost($args['projectKey'], $body);
    }


    public function update(Cart $cart)
    {
        $builder = new CartUpdateBuilder(function(CartUpdateBuilder $builder) { return $this->withIDValue($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($cart);
        if ($cart instanceof MapperAware) {
            $builder->setMapper($cart->getMapper());
        }
        return $builder;
    }

    public function delete(Cart $cart)
    {
        return $this->withIDValue($cart->getId())->delete()->withVersion($cart->getVersion());
    }

    /**
     * @param CartDraft|callable $cartDraftDraft builder function <code>
     *   function(CartDraft $cartDraft): CartDraft {
     *     // modify $draft as needed
     *     return $cartDraft;
     *   }
     *   </code>
     */
    public function create($cartDraft)
    {
        if (is_callable($cartDraft)) {
            $callback = $cartDraft;
            $emptyDraft = $this->mapData(CartDraft::class, null);
            $cartDraft = $callback($emptyDraft);
        }
        if (!$cartDraft instanceof CartDraft) {
            throw new \InvalidArgumentException();
        }
        return $this->post($cartDraft);
    }
}
