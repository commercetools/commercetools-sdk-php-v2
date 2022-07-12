<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

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

     * @var ?int
     */
    protected $quantity;

    /**

     * @var ?DiscountedLineItemPrice
     */
    protected $discountedPrice;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $quantity = null,
        ?DiscountedLineItemPrice $discountedPrice = null
    ) {
        $this->quantity = $quantity;
        $this->discountedPrice = $discountedPrice;

    }

    /**

     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity =  (int) $data;
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

            $this->discountedPrice =  DiscountedLineItemPriceModel::of($data);
        }

        return $this->discountedPrice;
    }


    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?DiscountedLineItemPrice $discountedPrice
     */
    public function setDiscountedPrice(?DiscountedLineItemPrice $discountedPrice): void
    {
        $this->discountedPrice = $discountedPrice;
    }



}
