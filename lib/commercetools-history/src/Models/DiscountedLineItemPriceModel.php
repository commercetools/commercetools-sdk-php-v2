<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountedLineItemPriceModel extends JsonObjectModel implements DiscountedLineItemPrice
{

    /**
     * @var ?Money
     */
    protected $value;

    /**
     * @var ?DiscountedLineItemPortionCollection
     */
    protected $includedDiscounts;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $value = null,
        ?DiscountedLineItemPortionCollection $includedDiscounts = null
    ) {
        $this->value = $value;
        $this->includedDiscounts = $includedDiscounts;

    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value =  MoneyModel::of($data);
        }

        return $this->value;
    }

    /**
     * @return null|DiscountedLineItemPortionCollection
     */
    public function getIncludedDiscounts()
    {
        if (is_null($this->includedDiscounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_INCLUDED_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->includedDiscounts =  DiscountedLineItemPortionCollection::fromArray($data);
        }

        return $this->includedDiscounts;
    }


    /**
     * @param ?Money $value
     */
    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?DiscountedLineItemPortionCollection $includedDiscounts
     */
    public function setIncludedDiscounts(?DiscountedLineItemPortionCollection $includedDiscounts): void
    {
        $this->includedDiscounts = $includedDiscounts;
    }



}
