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
final class CartValueTierModel extends JsonObjectModel implements CartValueTier
{
    public const DISCRIMINATOR_VALUE = 'CartValue';
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


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $minimumCentAmount = null,
        ?Money $price = null,
        ?bool $isMatching = null
    ) {
        $this->minimumCentAmount = $minimumCentAmount;
        $this->price = $price;
        $this->isMatching = $isMatching;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Can be one of the following or absent.</p>
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
     * @return null|int
     */
    public function getMinimumCentAmount()
    {
        if (is_null($this->minimumCentAmount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MINIMUM_CENT_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->minimumCentAmount = (int) $data;
        }

        return $this->minimumCentAmount;
    }

    /**
     * <p>Draft type that stores amounts in cent precision for the specified currency.</p>
     * <p>For storing money values in fractions of the minor unit in a currency, use <a href="ctp:api:type:HighPrecisionMoneyDraft">HighPrecisionMoneyDraft</a> instead.</p>
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
     * @param ?int $minimumCentAmount
     */
    public function setMinimumCentAmount(?int $minimumCentAmount): void
    {
        $this->minimumCentAmount = $minimumCentAmount;
    }

    /**
     * @param ?Money $price
     */
    public function setPrice(?Money $price): void
    {
        $this->price = $price;
    }

    /**
     * @param ?bool $isMatching
     */
    public function setIsMatching(?bool $isMatching): void
    {
        $this->isMatching = $isMatching;
    }
}
