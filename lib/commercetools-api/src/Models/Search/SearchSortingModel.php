<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SearchSortingModel extends JsonObjectModel implements SearchSorting
{
    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?string
     */
    protected $language;

    /**
     *
     * @var ?string
     */
    protected $order;

    /**
     *
     * @var ?string
     */
    protected $mode;

    /**
     *
     * @var ?string
     */
    protected $fieldType;

    /**
     *
     * @var ?SearchQueryExpression
     */
    protected $filter;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?string $language = null,
        ?string $order = null,
        ?string $mode = null,
        ?string $fieldType = null,
        ?SearchQueryExpression $filter = null
    ) {
        $this->field = $field;
        $this->language = $language;
        $this->order = $order;
        $this->mode = $mode;
        $this->fieldType = $fieldType;
        $this->filter = $filter;
    }

    /**
     * <p>Use any searchable field of the resource as sort criterion.</p>
     *
     *
     * @return null|string
     */
    public function getField()
    {
        if (is_null($this->field)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD);
            if (is_null($data)) {
                return null;
            }
            $this->field = (string) $data;
        }

        return $this->field;
    }

    /**
     * <p>String value specifying linguistic and regional preferences using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag format</a>, as described in <a href="https://www.rfc-editor.org/rfc/bcp/bcp47.txt">BCP 47</a>. The format combines language, script, and region using hyphen-separated subtags. For example: <code>en</code>, <code>en-US</code>, <code>zh-Hans-SG</code>.</p>
     *
     *
     * @return null|string
     */
    public function getLanguage()
    {
        if (is_null($this->language)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LANGUAGE);
            if (is_null($data)) {
                return null;
            }
            $this->language = (string) $data;
        }

        return $this->language;
    }

    /**
     * <p>Specify the order in which the search results should be sorted.
     * Can be <code>asc</code> for ascending, or <code>desc</code> for descending order.</p>
     *
     *
     * @return null|string
     */
    public function getOrder()
    {
        if (is_null($this->order)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->order = (string) $data;
        }

        return $this->order;
    }

    /**
     * <p>Specify the sort mode to be applied for a set-type <code>field</code>.</p>
     *
     *
     * @return null|string
     */
    public function getMode()
    {
        if (is_null($this->mode)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MODE);
            if (is_null($data)) {
                return null;
            }
            $this->mode = (string) $data;
        }

        return $this->mode;
    }

    /**
     * <p>Provide the data type of the given <code>field</code>.</p>
     *
     *
     * @return null|string
     */
    public function getFieldType()
    {
        if (is_null($this->fieldType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->fieldType = (string) $data;
        }

        return $this->fieldType;
    }

    /**
     * <p>Allows you to apply a <a href="/../api/search-query-language#sort-filter">sort filter</a>.</p>
     *
     *
     * @return null|SearchQueryExpression
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }

            $this->filter = SearchQueryExpressionModel::of($data);
        }

        return $this->filter;
    }


    /**
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @param ?string $order
     */
    public function setOrder(?string $order): void
    {
        $this->order = $order;
    }

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void
    {
        $this->fieldType = $fieldType;
    }

    /**
     * @param ?SearchQueryExpression $filter
     */
    public function setFilter(?SearchQueryExpression $filter): void
    {
        $this->filter = $filter;
    }
}
