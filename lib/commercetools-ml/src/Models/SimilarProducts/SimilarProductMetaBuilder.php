<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Ml\Models\Common\LocalizedString;
use Commercetools\Ml\Models\Common\LocalizedStringBuilder;
use Commercetools\Ml\Models\Common\Money;
use Commercetools\Ml\Models\Common\MoneyBuilder;

/**
 * @implements Builder<SimilarProductMeta>
 */
final class SimilarProductMetaBuilder implements Builder
{
    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**
     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $description;

    /**
     * @var null|Money|MoneyBuilder
     */
    private $price;

    /**
     * @var ?int
     */
    private $variantCount;

    /**
     * <p>Localized product name used for similarity estimation.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Localized product description used for similarity estimation.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        return $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description;
    }

    /**
     * <p>The product price in cents using the currency defined in SimilarProductSearchRequest If multiple prices exist, the median value is taken as a representative amount.</p>
     *
     * @return null|Money
     */
    public function getPrice()
    {
        return $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price;
    }

    /**
     * <p>Total number of variants associated with the product.</p>
     *
     * @return null|int
     */
    public function getVariantCount()
    {
        return $this->variantCount;
    }

    /**
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPrice(?Money $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVariantCount(?int $variantCount)
    {
        $this->variantCount = $variantCount;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPriceBuilder(?MoneyBuilder $price)
    {
        $this->price = $price;

        return $this;
    }

    public function build(): SimilarProductMeta
    {
        return new SimilarProductMetaModel(
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description,
            $this->price instanceof MoneyBuilder ? $this->price->build() : $this->price,
            $this->variantCount
        );
    }

    public static function of(): SimilarProductMetaBuilder
    {
        return new self();
    }
}
