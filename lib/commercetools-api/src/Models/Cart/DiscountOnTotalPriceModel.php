<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountOnTotalPriceModel extends JsonObjectModel implements DiscountOnTotalPrice
{
    /**
     *
     * @var ?TypedMoney
     */
    protected $discountedAmount;

    /**
     *
     * @var ?DiscountedTotalPricePortionCollection
     */
    protected $includedDiscounts;

    /**
     *
     * @var ?TypedMoney
     */
    protected $discountedNetAmount;

    /**
     *
     * @var ?TypedMoney
     */
    protected $discountedGrossAmount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TypedMoney $discountedAmount = null,
        ?DiscountedTotalPricePortionCollection $includedDiscounts = null,
        ?TypedMoney $discountedNetAmount = null,
        ?TypedMoney $discountedGrossAmount = null
    ) {
        $this->discountedAmount = $discountedAmount;
        $this->includedDiscounts = $includedDiscounts;
        $this->discountedNetAmount = $discountedNetAmount;
        $this->discountedGrossAmount = $discountedGrossAmount;
    }

    /**
     * <p>Money value of the discount on the total price of the Cart or Order.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getDiscountedAmount()
    {
        if (is_null($this->discountedAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->discountedAmount = $className::of($data);
        }

        return $this->discountedAmount;
    }

    /**
     * <p>Discounts that impact the total price of the Cart or Order.</p>
     *
     *
     * @return null|DiscountedTotalPricePortionCollection
     */
    public function getIncludedDiscounts()
    {
        if (is_null($this->includedDiscounts)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_INCLUDED_DISCOUNTS);
            if (is_null($data)) {
                return null;
            }
            $this->includedDiscounts = DiscountedTotalPricePortionCollection::fromArray($data);
        }

        return $this->includedDiscounts;
    }

    /**
     * <p>Money value of the discount on the total net price of the Cart or Order.
     * Present only when <code>taxedPrice</code> of the Cart or Order exists.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getDiscountedNetAmount()
    {
        if (is_null($this->discountedNetAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_NET_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->discountedNetAmount = $className::of($data);
        }

        return $this->discountedNetAmount;
    }

    /**
     * <p>Money value of the discount on the total gross price of the Cart or Order.
     * Present only when <code>taxedPrice</code> of the Cart or Order exists.</p>
     *
     *
     * @return null|TypedMoney
     */
    public function getDiscountedGrossAmount()
    {
        if (is_null($this->discountedGrossAmount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNTED_GROSS_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->discountedGrossAmount = $className::of($data);
        }

        return $this->discountedGrossAmount;
    }


    /**
     * @param ?TypedMoney $discountedAmount
     */
    public function setDiscountedAmount(?TypedMoney $discountedAmount): void
    {
        $this->discountedAmount = $discountedAmount;
    }

    /**
     * @param ?DiscountedTotalPricePortionCollection $includedDiscounts
     */
    public function setIncludedDiscounts(?DiscountedTotalPricePortionCollection $includedDiscounts): void
    {
        $this->includedDiscounts = $includedDiscounts;
    }

    /**
     * @param ?TypedMoney $discountedNetAmount
     */
    public function setDiscountedNetAmount(?TypedMoney $discountedNetAmount): void
    {
        $this->discountedNetAmount = $discountedNetAmount;
    }

    /**
     * @param ?TypedMoney $discountedGrossAmount
     */
    public function setDiscountedGrossAmount(?TypedMoney $discountedGrossAmount): void
    {
        $this->discountedGrossAmount = $discountedGrossAmount;
    }
}
