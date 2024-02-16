<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\DiscountedLineItemPortionDraftCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountedLineItemPriceDraftModel extends JsonObjectModel implements DiscountedLineItemPriceDraft
{
    /**
     *
     * @var ?Money
     */
    protected $value;

    /**
     *
     * @var ?DiscountedLineItemPortionDraftCollection
     */
    protected $includedDiscounts;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Money $value = null,
        ?DiscountedLineItemPortionDraftCollection $includedDiscounts = null
    ) {
        $this->value = $value;
        $this->includedDiscounts = $includedDiscounts;
    }

    /**
     * <p>Discounted money value.</p>
     *
     *
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

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }

    /**
     * <p>Discounts to be applied.</p>
     *
     *
     * @return null|DiscountedLineItemPortionDraftCollection
     */
    public function getIncludedDiscounts()
    {
        if (is_null($this->includedDiscounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_INCLUDED_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->includedDiscounts = DiscountedLineItemPortionDraftCollection::fromArray($data);
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
     * @param ?DiscountedLineItemPortionDraftCollection $includedDiscounts
     */
    public function setIncludedDiscounts(?DiscountedLineItemPortionDraftCollection $includedDiscounts): void
    {
        $this->includedDiscounts = $includedDiscounts;
    }
}
