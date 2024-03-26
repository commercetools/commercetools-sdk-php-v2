<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SearchSorting>
 */
final class SearchSortingBuilder implements Builder
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
    private $fieldType;

    /**

     * @var null|SearchQueryExpression|SearchQueryExpressionBuilder
     */
    private $filter;

    /**
     * <p>Use any searchable field of the resource as sort criterion.</p>
     *

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
     * <p>Specify the order in which the search results should be sorted.
     * Can be <code>asc</code> for ascending, or <code>desc</code> for descending order.</p>
     *

     * @return null|string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * <p>Specify the sort mode to be applied for a set-type <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * <p>Provide the data type of the given <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * <p>Allows you to apply a <a href="/../api/search-query-language#sort-filter">sort filter</a>.</p>
     *

     * @return null|SearchQueryExpression
     */
    public function getFilter()
    {
        return $this->filter instanceof SearchQueryExpressionBuilder ? $this->filter->build() : $this->filter;
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
     * @param ?string $fieldType
     * @return $this
     */
    public function withFieldType(?string $fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * @param ?SearchQueryExpression $filter
     * @return $this
     */
    public function withFilter(?SearchQueryExpression $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @deprecated use withFilter() instead
     * @return $this
     */
    public function withFilterBuilder(?SearchQueryExpressionBuilder $filter)
    {
        $this->filter = $filter;

        return $this;
    }

    public function build(): SearchSorting
    {
        return new SearchSortingModel(
            $this->field,
            $this->language,
            $this->order,
            $this->mode,
            $this->fieldType,
            $this->filter instanceof SearchQueryExpressionBuilder ? $this->filter->build() : $this->filter
        );
    }

    public static function of(): SearchSortingBuilder
    {
        return new self();
    }
}
