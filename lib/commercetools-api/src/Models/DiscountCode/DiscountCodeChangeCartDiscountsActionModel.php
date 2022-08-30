<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountCodeChangeCartDiscountsActionModel extends JsonObjectModel implements DiscountCodeChangeCartDiscountsAction
{
    public const DISCRIMINATOR_VALUE = 'changeCartDiscounts';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?CartDiscountResourceIdentifierCollection
     */
    protected $cartDiscounts;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CartDiscountResourceIdentifierCollection $cartDiscounts = null,
        ?string $action = null
    ) {
        $this->cartDiscounts = $cartDiscounts;
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
     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts()
    {
        if (is_null($this->cartDiscounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_CART_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->cartDiscounts = CartDiscountResourceIdentifierCollection::fromArray($data);
        }

        return $this->cartDiscounts;
    }


    /**
     * @param ?CartDiscountResourceIdentifierCollection $cartDiscounts
     */
    public function setCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts): void
    {
        $this->cartDiscounts = $cartDiscounts;
    }
}
