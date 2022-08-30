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
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $cartPredicate;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $cartPredicate = null,
        ?string $action = null
    ) {
        $this->cartPredicate = $cartPredicate;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>New value to set.</p>
     *
     *
     * @return null|string
     */
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CART_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->cartPredicate = (string) $data;
        }

        return $this->cartPredicate;
    }


    /**
     * @param ?string $cartPredicate
     */
    public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }
}
