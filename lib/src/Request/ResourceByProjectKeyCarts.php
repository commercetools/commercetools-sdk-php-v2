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
use Commercetools\Types\Cart\Cart;
use Commercetools\Builder\CartUpdateBuilder;

use Commercetools\Types\Cart\CartDraft;


class ResourceByProjectKeyCarts extends Resource
{
    /**
     * @return ResourceByProjectKeyCartsReplicate
     */
    public function replicate(): ResourceByProjectKeyCartsReplicate {
        return new ResourceByProjectKeyCartsReplicate($this->getUri() . '/replicate', $this->getArgs(), $this->getMapper());
    }
    /**
     * @return ResourceByProjectKeyCartsByID
     */
    public function withId($ID = null): ResourceByProjectKeyCartsByID {
        $args = array_merge($this->getArgs(), array_filter(['ID' => $ID], function($value) { return !is_null($value); }));
        return new ResourceByProjectKeyCartsByID($this->getUri() . '/{ID}', $args, $this->getMapper());
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


    /**
     * @param Cart $cart
     * @return CartUpdateBuilder
     */
    public function update(Cart $cart): CartUpdateBuilder
    {
        $builder = new CartUpdateBuilder(function(CartUpdateBuilder $builder) { return $this->withId($builder->getResource()->getId())->post($builder->build()); });
        $builder->with($cart);
        if ($cart instanceof MapperAware) {
            $builder->setMapper($cart->getMapper());
        }
        return $builder;
    }

    /**
     * @param Cart $cart
     * @return ByProjectKeyCartsByIDDelete
     */
    public function delete(Cart $cart): ByProjectKeyCartsByIDDelete
    {
        return $this->withId($cart->getId())->delete()->withVersion($cart->getVersion());
    }

    /**
     * @param CartDraft|callable $cartDraft builder function <code>
     *   function(CartDraft $cartDraft): CartDraft {
     *     // modify $draft as needed
     *     return $cartDraft;
     *   }
     *   </code>
     * @throws InvalidArgumentException
     * @return ByProjectKeyCartsPost
     */
    public function create($cartDraft): ByProjectKeyCartsPost
    {
        if (is_callable($cartDraft)) {
            $callback = $cartDraft;
            $emptyDraft = $this->mapData(CartDraft::class, null);
            $cartDraft = $callback($emptyDraft);
        }
        if (!$cartDraft instanceof CartDraft) {
            throw new InvalidArgumentException();
        }
        return $this->post($cartDraft);
    }
}
