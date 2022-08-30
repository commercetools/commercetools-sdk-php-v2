<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyModel;
use stdClass;

/**
 * @internal
 */
final class CartClassificationTierModel extends JsonObjectModel implements CartClassificationTier
{
    public const DISCRIMINATOR_VALUE = 'CartClassification';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $value;

    /**
     *
     * @var ?Money
     */
    protected $price;

    /**
     *
     * @var ?ShippingRatePriceTierCollection
     */
    protected $tiers;

    /**
     *
     * @var ?bool
     */
    protected $isMatching;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $value = null,
        ?Money $price = null,
        ?ShippingRatePriceTierCollection $tiers = null,
        ?bool $isMatching = null,
        ?string $type = null
    ) {
        $this->value = $value;
        $this->price = $price;
        $this->tiers = $tiers;
        $this->isMatching = $isMatching;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     *
     * @return null|string
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = (string) $data;
        }

        return $this->value;
    }

    /**
     *
     * @return null|Money
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }

            $this->price = MoneyModel::of($data);
        }

        return $this->price;
    }

    /**
     *
     * @return null|ShippingRatePriceTierCollection
     */
    public function getTiers()
    {
        if (is_null($this->tiers)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TIERS);
            if (is_null($data)) {
                return null;
            }
            $this->tiers = ShippingRatePriceTierCollection::fromArray($data);
        }

        return $this->tiers;
    }

    /**
     *
     * @return null|bool
     */
    public function getIsMatching()
    {
        if (is_null($this->isMatching)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_IS_MATCHING);
            if (is_null($data)) {
                return null;
            }
            $this->isMatching = (bool) $data;
        }

        return $this->isMatching;
    }


    /**
     * @param ?string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?ShippingRatePriceTierCollection $tiers
     */
    public function setTiers(?ShippingRatePriceTierCollection $tiers): void
    {
        $this->tiers = $tiers;
    }

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }
}
