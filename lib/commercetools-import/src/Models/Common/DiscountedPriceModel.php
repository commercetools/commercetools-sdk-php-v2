<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class DiscountedPriceModel extends JsonObjectModel implements DiscountedPrice
{

    /**
     * @var ?Money
     */
    protected $value;

    /**
     * @var ?ProductDiscountKeyReference
     */
    protected $discount;


    public function __construct(
        Money $value = null,
        ProductDiscountKeyReference $discount = null
    ) {
        $this->value = $value;
        $this->discount = $discount;

    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountedPrice::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Reference to a ProductDiscount.</p>
     *
     * @return null|ProductDiscountKeyReference
     */
    public function getDiscount()
    {
        if (is_null($this->discount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DiscountedPrice::FIELD_DISCOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->discount = ProductDiscountKeyReferenceModel::of($data);
        }

        return $this->discount;
    }

    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }

    public function setDiscount(?ProductDiscountKeyReference $discount): void
    {
        $this->discount = $discount;
    }



}
