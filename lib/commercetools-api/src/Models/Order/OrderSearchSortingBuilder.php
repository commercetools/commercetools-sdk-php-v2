<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSearchSorting>
 */
final class OrderSearchSortingBuilder implements Builder
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

     * @var null|OrderSearchQueryExpression|OrderSearchQueryExpressionBuilder
     */
    private $filter;

    /**

     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**

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

     * @return null|OrderSearchQueryExpression
     */
    public function getFilter()
    {
        return $this->filter instanceof OrderSearchQueryExpressionBuilder ? $this->filter->build() : $this->filter;
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
     * @param ?OrderSearchQueryExpression $filter
     * @return $this
     */
    public function withFilter(?OrderSearchQueryExpression $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @deprecated use withFilter() instead
     * @return $this
     */
    public function withFilterBuilder(?OrderSearchQueryExpressionBuilder $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    public function build(): OrderSearchSorting
    {
        return new OrderSearchSortingModel(
            $this->field,
            $this->language,
            $this->order,
            $this->mode,
            $this->filter instanceof OrderSearchQueryExpressionBuilder ? $this->filter->build() : $this->filter
        );
    }

    public static function of(): OrderSearchSortingBuilder
    {
        return new self();
    }
}
