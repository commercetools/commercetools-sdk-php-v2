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
 * @implements Builder<ProductSearchQueryExpressionValue>
 */
final class ProductSearchQueryExpressionValueBuilder implements Builder
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


    public function build(): ProductSearchQueryExpressionValue
    {
        return new ProductSearchQueryExpressionValueModel(
            $this->field,
            $this->boost,
            $this->attributeType
        );
    }

    public static function of(): ProductSearchQueryExpressionValueBuilder
    {
        return new self();
    }
}
