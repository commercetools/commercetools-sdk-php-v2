<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Api\Models\CartDiscount\CartDiscountResourceIdentifierCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class DiscountCodeChangeCartDiscountsActionModel extends JsonObjectModel implements DiscountCodeChangeCartDiscountsAction
{
    const DISCRIMINATOR_VALUE = 'changeCartDiscounts';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?CartDiscountResourceIdentifierCollection
     */
    protected $cartDiscounts;

    public function __construct(
        CartDiscountResourceIdentifierCollection $cartDiscounts = null
    ) {
        $this->cartDiscounts = $cartDiscounts;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|CartDiscountResourceIdentifierCollection
     */
    public function getCartDiscounts()
    {
        if (is_null($this->cartDiscounts)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(DiscountCodeChangeCartDiscountsAction::FIELD_CART_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->cartDiscounts = CartDiscountResourceIdentifierCollection::fromArray($data);
        }

        return $this->cartDiscounts;
    }

    public function setCartDiscounts(?CartDiscountResourceIdentifierCollection $cartDiscounts): void
    {
        $this->cartDiscounts = $cartDiscounts;
    }
}
