<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartValueTierModel extends JsonObjectModel implements CartValueTier
{
    const DISCRIMINATOR_VALUE = 'CartValue';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $minimumCentAmount;

    /**
     * @var ?Money
     */
    protected $price;

    /**
     * @var ?bool
     */
    protected $isMatching;

    public function __construct(
        string $type = null,
        int $minimumCentAmount = null,
        Money $price = null,
        bool $isMatching = null
    ) {
        $this->type = $type;
        $this->minimumCentAmount = $minimumCentAmount;
        $this->price = $price;
        $this->isMatching = $isMatching;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShippingRatePriceTier::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|int
     */
    public function getMinimumCentAmount()
    {
        if (is_null($this->minimumCentAmount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CartValueTier::FIELD_MINIMUM_CENT_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->minimumCentAmount = (int) $data;
        }

        return $this->minimumCentAmount;
    }

    /**
     * @return null|Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartValueTier::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = MoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     * @return null|bool
     */
    public function getIsMatching()
    {
        if (is_null($this->isMatching)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(CartValueTier::FIELD_IS_MATCHING);
            if (is_null($data)) {
                return null;
            }
            $this->isMatching = (bool) $data;
        }

        return $this->isMatching;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setMinimumCentAmount(?int $minimumCentAmount): void
    {
        $this->minimumCentAmount = $minimumCentAmount;
    }

    public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }

    public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }
}
