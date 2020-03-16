<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

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
final class ShippingRateDraftModel extends JsonObjectModel implements ShippingRateDraft
{
    /**
     * @var ?Money
     */
    protected $price;

    /**
     * @var ?Money
     */
    protected $freeAbove;

    /**
     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;


    public function __construct(
        Money $price = null,
        Money $freeAbove = null,
        ShippingRatePriceTierCollection $tiers = null
    ) {
        $this->price = $price;
        $this->freeAbove = $freeAbove;
        $this->tiers = $tiers;
    }

    /**
     * @return null|Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingRateDraft::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = MoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     * <p>The shipping is free if the order total (the sum of line item prices) exceeds the freeAbove value.
     * Note: <code>freeAbove</code> applies before any Cart or Product discounts, and can cause discounts to apply in invalid scenarios.
     * Use a Cart Discount to set the shipping price to 0 to avoid providing free shipping in invalid discount scenarios.</p>
     *
     * @return null|Money
     */
    public function getFreeAbove()
    {
        if (is_null($this->freeAbove)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ShippingRateDraft::FIELD_FREE_ABOVE);
            if (is_null($data)) {
                return null;
            }

            $this->freeAbove = MoneyModel::of($data);
        }

        return $this->freeAbove;
    }

    /**
     * <p>A list of shipping rate price tiers.</p>
     *
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ShippingRateDraft::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = ShippingRatePriceTierCollection::fromArray($data);
        }

        return $this->tiers;
    }

    public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }

    public function setFreeAbove(?Money $freeAbove): void
    {
        $this->freeAbove = $freeAbove;
    }

    public function setTiers(?ShippingRatePriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }
}
