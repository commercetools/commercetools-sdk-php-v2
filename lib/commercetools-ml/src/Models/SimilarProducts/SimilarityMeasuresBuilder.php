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

/**
 * @implements Builder<SimilarityMeasures>
 */
final class SimilarityMeasuresBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $name;

    /**
     * @var ?int
     */
    private $description;

    /**
     * @var ?int
     */
    private $attribute;

    /**
     * @var ?int
     */
    private $variantCount;

    /**
     * @var ?int
     */
    private $price;

    /**
     * <p>Importance of the <code>name</code> attribute in overall similarity.</p>
     *
     * @return null|int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Importance of the <code>description</code> attribute in overall similarity.</p>
     *
     * @return null|int
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <p>Importance of the <code>description</code> attribute in overall similarity.</p>
     *
     * @return null|int
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * <p>Importance of the number of product variants in overall similarity.</p>
     *
     * @return null|int
     */
    public function getVariantCount()
    {
        return $this->variantCount;
    }

    /**
     * <p>Importance of the <code>price</code> attribute in overall similarity.</p>
     *
     * @return null|int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param ?int $name
     * @return $this
     */
    public function withName(?int $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?int $description
     * @return $this
     */
    public function withDescription(?int $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param ?int $attribute
     * @return $this
     */
    public function withAttribute(?int $attribute)
    {
        $this->attribute = $attribute;

        return $this;
    }

    /**
     * @param ?int $variantCount
     * @return $this
     */
    public function withVariantCount(?int $variantCount)
    {
        $this->variantCount = $variantCount;

        return $this;
    }

    /**
     * @param ?int $price
     * @return $this
     */
    public function withPrice(?int $price)
    {
        $this->price = $price;

        return $this;
    }


    public function build(): SimilarityMeasures
    {
        return new SimilarityMeasuresModel(
            $this->name,
            $this->description,
            $this->attribute,
            $this->variantCount,
            $this->price
        );
    }

    public static function of(): SimilarityMeasuresBuilder
    {
        return new self();
    }
}
