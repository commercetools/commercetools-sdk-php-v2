<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartDiscountChangeCartPredicateActionModel extends JsonObjectModel implements CartDiscountChangeCartPredicateAction
{
    public const DISCRIMINATOR_VALUE = 'changeCartPredicate';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $cartPredicate;


    public function __construct(
        string $cartPredicate = null
    ) {
        $this->cartPredicate = $cartPredicate;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>A valid Cart predicate.</p>
     *
     * @return null|string
     */
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountChangeCartPredicateAction::FIELD_CART_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->cartPredicate = (string) $data;
        }

        return $this->cartPredicate;
    }

    public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }
}
