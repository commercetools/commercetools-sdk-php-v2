<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Common\ImportReference;
use Commercetools\Import\Models\Common\ImportReferenceBuilder;
use Commercetools\Import\Models\Common\Money;
use Commercetools\Import\Models\Common\MoneyBuilder;
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
     * @var ImportReference|?ImportReferenceBuilder
     */
    private $productVariant;

    /**
     * @var ImportReference|?ImportReferenceBuilder
     */
    private $customerGroup;

    /**
     * @var ImportReference|?ImportReferenceBuilder
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
     * <p>A two-digit country code as per <a href="https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2">ISO 3166-1 alpha-2</a>.</p>.
     *
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * <p>The product variant in which this price is contained.</p>.
     *
     * @return null|ImportReference
     */
    public function getProductVariant()
    {
        return $this->productVariant instanceof ImportReferenceBuilder ? $this->productVariant->build() : $this->productVariant;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getCustomerGroup()
    {
        return $this->customerGroup instanceof ImportReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup;
    }

    /**
     * <p>An import reference references a resource by its key.</p>.
     *
     * @return null|ImportReference
     */
    public function getChannel()
    {
        return $this->channel instanceof ImportReferenceBuilder ? $this->channel->build() : $this->channel;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
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
    public function withProductVariant(?ImportReference $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroup(?ImportReference $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannel(?ImportReference $channel)
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
    public function withProductVariantBuilder(?ImportReferenceBuilder $productVariant)
    {
        $this->productVariant = $productVariant;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCustomerGroupBuilder(?ImportReferenceBuilder $customerGroup)
    {
        $this->customerGroup = $customerGroup;

        return $this;
    }

    /**
     * @return $this
     */
    public function withChannelBuilder(?ImportReferenceBuilder $channel)
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
            ($this->productVariant instanceof ImportReferenceBuilder ? $this->productVariant->build() : $this->productVariant),
            ($this->customerGroup instanceof ImportReferenceBuilder ? $this->customerGroup->build() : $this->customerGroup),
            ($this->channel instanceof ImportReferenceBuilder ? $this->channel->build() : $this->channel),
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
