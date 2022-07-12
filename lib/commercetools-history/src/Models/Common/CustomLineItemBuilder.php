<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomLineItem>
 */
final class CustomLineItemBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $money;

    /**

     * @var null|TaxedItemPrice|TaxedItemPriceBuilder
     */
    private $taxedPrice;

    /**

     * @var null|Money|MoneyBuilder
     */
    private $totalPrice;

    /**

     * @var ?string
     */
    private $slug;

    /**

     * @var ?int
     */
    private $quantity;

    /**
     * <p>The unique ID of this CustomLineItem.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**

     * @return null|Money
     */
    public function getMoney()
    {
        return $this->money instanceof MoneyBuilder ? $this->money->build() : $this->money;
    }

    /**

     * @return null|TaxedItemPrice
     */
    public function getTaxedPrice()
    {
        return $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice;
    }

    /**

     * @return null|Money
     */
    public function getTotalPrice()
    {
        return $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice;
    }

    /**
     * <p>A unique String in the cart to identify this CustomLineItem.</p>
     *

     * @return null|string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * <p>The amount of a CustomLineItem in the cart. Must be a positive integer.</p>
     *

     * @return null|int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?Money $money
     * @return $this
     */
    public function withMoney(?Money $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @param ?TaxedItemPrice $taxedPrice
     * @return $this
     */
    public function withTaxedPrice(?TaxedItemPrice $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @param ?Money $totalPrice
     * @return $this
     */
    public function withTotalPrice(?Money $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    /**
     * @param ?string $slug
     * @return $this
     */
    public function withSlug(?string $slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param ?int $quantity
     * @return $this
     */
    public function withQuantity(?int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withMoney() instead
     * @return $this
     */
    public function withMoneyBuilder(?MoneyBuilder $money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * @deprecated use withTaxedPrice() instead
     * @return $this
     */
    public function withTaxedPriceBuilder(?TaxedItemPriceBuilder $taxedPrice)
    {
        $this->taxedPrice = $taxedPrice;

        return $this;
    }

    /**
     * @deprecated use withTotalPrice() instead
     * @return $this
     */
    public function withTotalPriceBuilder(?MoneyBuilder $totalPrice)
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function build(): CustomLineItem
    {
        return new CustomLineItemModel(
            $this->id,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->money instanceof MoneyBuilder ? $this->money->build() : $this->money,
            $this->taxedPrice instanceof TaxedItemPriceBuilder ? $this->taxedPrice->build() : $this->taxedPrice,
            $this->totalPrice instanceof MoneyBuilder ? $this->totalPrice->build() : $this->totalPrice,
            $this->slug,
            $this->quantity
        );
    }

    public static function of(): CustomLineItemBuilder
    {
        return new self();
    }
}
