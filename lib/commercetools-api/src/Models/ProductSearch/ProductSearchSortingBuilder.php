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
 * @implements Builder<ProductSearchSorting>
 */
final class ProductSearchSortingBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $field;

    /**

     * @var ?string
     */
    private $language;

    /**

     * @var ?string
     */
    private $order;

    /**

     * @var ?string
     */
    private $mode;

    /**

     * @var ?string
     */
    private $attributeType;

    /**

     * @var null|ProductSearchQueryExpression|ProductSearchQueryExpressionBuilder
     */
    private $filter;

    /**

     * @var ?bool
     */
    private $internal;

    /**

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * <p>String value specifying linguistic and regional preferences using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag format</a>, as described in <a href="https://www.rfc-editor.org/rfc/bcp/bcp47.txt">BCP 47</a>. The format combines language, script, and region using hyphen-separated subtags. For example: <code>en</code>, <code>en-US</code>, <code>zh-Hans-SG</code>.</p>
     *

     * @return null|string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**

     * @return null|string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**

     * @return null|string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**

     * @return null|string
     */
    public function getAttributeType()
    {
        return $this->attributeType;
    }

    /**

     * @return null|ProductSearchQueryExpression
     */
    public function getFilter()
    {
        return $this->filter instanceof ProductSearchQueryExpressionBuilder ? $this->filter->build() : $this->filter;
    }

    /**

     * @return null|bool
     */
    public function getInternal()
    {
        return $this->internal;
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
     * @param ?string $language
     * @return $this
     */
    public function withLanguage(?string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @param ?string $order
     * @return $this
     */
    public function withOrder(?string $order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @param ?string $mode
     * @return $this
     */
    public function withMode(?string $mode)
    {
        $this->mode = $mode;

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
     * @param ?ProductSearchQueryExpression $filter
     * @return $this
     */
    public function withFilter(?ProductSearchQueryExpression $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @param ?bool $internal
     * @return $this
     */
    public function withInternal(?bool $internal)
    {
        $this->internal = $internal;

        return $this;
    }

    /**
     * @deprecated use withFilter() instead
     * @return $this
     */
    public function withFilterBuilder(?ProductSearchQueryExpressionBuilder $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    public function build(): ProductSearchSorting
    {
        return new ProductSearchSortingModel(
            $this->field,
            $this->language,
            $this->order,
            $this->mode,
            $this->attributeType,
            $this->filter instanceof ProductSearchQueryExpressionBuilder ? $this->filter->build() : $this->filter,
            $this->internal
        );
    }

    public static function of(): ProductSearchSortingBuilder
    {
        return new self();
    }
}
