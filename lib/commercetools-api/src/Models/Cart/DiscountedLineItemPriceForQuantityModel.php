<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountedLineItemPriceForQuantityModel extends JsonObjectModel implements DiscountedLineItemPriceForQuantity
{
    /**
     * @var ?float
     */
    protected $quantity;

    /**
     * @var ?DiscountedLineItemPrice
     */
    protected $discountedPrice;


    public function __construct(
        float $quantity = null,
        DiscountedLineItemPrice $discountedPrice = null
    ) {
        $this->quantity = $quantity;
        $this->discountedPrice = $discountedPrice;
    }

    /**
     * @return null|float
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (float) $data;
        }

        return $this->quantity;
    }

    /**
     * @return null|DiscountedLineItemPrice
     */
    public function getDiscountedPrice()
    {
        if (is_null($this->discountedPrice)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->discountedPrice = DiscountedLineItemPriceModel::of($data);
        }

        return $this->discountedPrice;
    }


    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }
}
