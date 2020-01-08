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

final class CartClassificationTierModel extends JsonObjectModel implements CartClassificationTier
{
    const DISCRIMINATOR_VALUE = 'CartClassification';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?string
     */
    protected $value;

    /**
     * @var ?Money
     */
    protected $price;

    /**
     * @var ?bool
     */
    protected $isMatching;

    public function __construct(
        string $value = null,
        Money $price = null,
        bool $isMatching = null
    ) {
        $this->value = $value;
        $this->price = $price;
        $this->isMatching = $isMatching;
        $this->type = static::DISCRIMINATOR_VALUE;
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
     * @return null|string
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartClassificationTier::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (string) $data;
        }

        return $this->value;
    }

    /**
     * @return null|Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartClassificationTier::FIELD_PRICE);
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
            $data = $this->raw(CartClassificationTier::FIELD_IS_MATCHING);
            if (is_null($data)) {
                return null;
            }
            $this->isMatching = (bool) $data;
        }

        return $this->isMatching;
    }

    public function setValue(?string $value): void
    {
        $this->value = $value;
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
