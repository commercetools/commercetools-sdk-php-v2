<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchLongRangeValue>
 */
final class ProductSearchLongRangeValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $field;

    /**

     * @var ?float
     */
    private $boost;

    /**

     * @var ?string
     */
    private $attributeType;

    /**

     * @var ?int
     */
    private $gte;

    /**

     * @var ?int
     */
    private $gt;

    /**

     * @var ?int
     */
    private $lte;

    /**

     * @var ?int
     */
    private $lt;

    /**

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**

     * @return null|float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**

     * @return null|string
     */
    public function getAttributeType()
    {
        return $this->attributeType;
    }

    /**

     * @return null|int
     */
    public function getGte()
    {
        return $this->gte;
    }

    /**

     * @return null|int
     */
    public function getGt()
    {
        return $this->gt;
    }

    /**

     * @return null|int
     */
    public function getLte()
    {
        return $this->lte;
    }

    /**

     * @return null|int
     */
    public function getLt()
    {
        return $this->lt;
    }

    /**
     * @param ?string $field
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @param ?float $boost
     * @return $this
     */
    public function withBoost(?float $boost)
    {
        $this->boost = $boost;

        return $this;
    }

    /**
     * @param ?string $attributeType
     * @return $this
     */
    public function withAttributeType(?string $attributeType)
    {
        $this->attributeType = $attributeType;

        return $this;
    }

    /**
     * @param ?int $gte
     * @return $this
     */
    public function withGte(?int $gte)
    {
        $this->gte = $gte;

        return $this;
    }

    /**
     * @param ?int $gt
     * @return $this
     */
    public function withGt(?int $gt)
    {
        $this->gt = $gt;

        return $this;
    }

    /**
     * @param ?int $lte
     * @return $this
     */
    public function withLte(?int $lte)
    {
        $this->lte = $lte;

        return $this;
    }

    /**
     * @param ?int $lt
     * @return $this
     */
    public function withLt(?int $lt)
    {
        $this->lt = $lt;

        return $this;
    }


    public function build(): ProductSearchLongRangeValue
    {
        return new ProductSearchLongRangeValueModel(
            $this->field,
            $this->boost,
            $this->attributeType,
            $this->gte,
            $this->gt,
            $this->lte,
            $this->lt
        );
    }

    public static function of(): ProductSearchLongRangeValueBuilder
    {
        return new self();
    }
}
