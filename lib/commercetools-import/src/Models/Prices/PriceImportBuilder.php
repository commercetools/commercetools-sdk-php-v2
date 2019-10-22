<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\ChannelKeyReference;
use Commercetools\Import\Models\Common\ChannelKeyReferenceBuilder;
use Commercetools\Import\Models\Common\CustomerGroupKeyReference;
use Commercetools\Import\Models\Common\CustomerGroupKeyReferenceBuilder;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyBuilder;
use Commercetools\Import\Models\Common\ProductKeyReference;
use Commercetools\Import\Models\Common\ProductKeyReferenceBuilder;
use Commercetools\Import\Models\Common\ProductVariantKeyReference;
use Commercetools\Import\Models\Common\ProductVariantKeyReferenceBuilder;
use DateTimeImmutable;

/**
 * @implements Builder<PriceImport>
 */
final class PriceImportBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $country;

    /**
     * @var ProductKeyReference|?ProductKeyReferenceBuilder
     */
    private $product;

    /**
     * @var ProductVariantKeyReference|?ProductVariantKeyReferenceBuilder
     */
    private $productVariant;

    /**
     * @var CustomerGroupKeyReference|?CustomerGroupKeyReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var ChannelKeyReference|?ChannelKeyReferenceBuilder
     */
    private $channel;

    /**
     * @var ?DateTimeImmutable
     */
    private $validUntil;

    /**
     * @var ?DateTimeImmutable
     */
    private $validFrom;

    /**
     * @var Money|?MoneyBuilder
     */
    private $value;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Maps to <code>Price.county</code>.</p>.
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>The product in which this product variant containong the price is contained. Maps to <code>ProductVariant.product</code>.</p>
     * <p>The product referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|ProductKeyReference
     */
    public function getProduct()
    {
        return $this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product;
    }

    /**
     * <p>The product variant in which this price is contained.</p>
     * <p>The product variant referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|ProductVariantKeyReference
     */
    public function getProductVariant()
    {
        return $this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant;
    }

    /**
     * <p>References a customer group by its key.</p>
     * <p>The customer group referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|CustomerGroupKeyReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof CustomerGroupKeyReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>References a channel by its key.</p>
     * <p>The channel referenced
     * must already exist in the commercetools project, or the
     * import item state is set to <code>Unresolved</code>.</p>.
     *
     * @return null|ChannelKeyReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ChannelKeyReferenceBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * <p>Maps to <code>Price.validUntil</code>.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * <p>Maps to <code>Price.validFrom</code>.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * <p>Maps to <code>Price.value</code>.</p>
     * <p>The Import API <strong>only</strong> supports <code>centPrecision</code> prices.</p>.
     *
     * @return null|Money
     */
    public function getValue()
    {
        return $this->value instanceof MoneyBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCountry(?string $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProduct(?ProductKeyReference $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductVariant(?ProductVariantKeyReference $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?CustomerGroupKeyReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannel(?ChannelKeyReference $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidUntil(?DateTimeImmutable $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValidFrom(?DateTimeImmutable $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?Money $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductBuilder(?ProductKeyReferenceBuilder $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductVariantBuilder(?ProductVariantKeyReferenceBuilder $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?CustomerGroupKeyReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelBuilder(?ChannelKeyReferenceBuilder $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?MoneyBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): PriceImport
    {
        return new PriceImportModel(
            $this->key,
            $this->country,
            ($this->product instanceof ProductKeyReferenceBuilder ? $this->product->build() : $this->product),
            ($this->productVariant instanceof ProductVariantKeyReferenceBuilder ? $this->productVariant->build() : $this->productVariant),
            ($this->customerGroup instanceof CustomerGroupKeyReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->channel instanceof ChannelKeyReferenceBuilder ? $this->channel->build() : $this->channel),
            $this->validUntil,
            $this->validFrom,
            ($this->value instanceof MoneyBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): PriceImportBuilder
    {
        return new self();
    }
}
