<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchSorting extends JsonObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_ORDER = 'order';
    public const FIELD_MODE = 'mode';
    public const FIELD_FIELD_TYPE = 'fieldType';
    public const FIELD_FILTER = 'filter';

    /**
     * <p>Use any searchable field of the resource as sort criterion.</p>
     *

     * @return null|string
     */
    public function getField();

    /**
     * <p>String value specifying linguistic and regional preferences using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag format</a>, as described in <a href="https://www.rfc-editor.org/rfc/bcp/bcp47.txt">BCP 47</a>. The format combines language, script, and region using hyphen-separated subtags. For example: <code>en</code>, <code>en-US</code>, <code>zh-Hans-SG</code>.</p>
     *

     * @return null|string
     */
    public function getLanguage();

    /**
     * <p>Specify the order in which the search results should be sorted.
     * Can be <code>asc</code> for ascending, or <code>desc</code> for descending order.</p>
     *

     * @return null|string
     */
    public function getOrder();

    /**
     * <p>Specify the sort mode to be applied for a set-type <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getMode();

    /**
     * <p>Provide the data type of the given <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getFieldType();

    /**
     * <p>Allows you to apply a <a href="/../api/search-query-language#sort-filter">sort filter</a>.</p>
     *

     * @return null|SearchQueryExpression
     */
    public function getFilter();

    /**
     * @param ?string $field
     */
    public function setField(?string $field): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?string $order
     */
    public function setOrder(?string $order): void;

    /**
     * @param ?string $mode
     */
    public function setMode(?string $mode): void;

    /**
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void;

    /**
     * @param ?SearchQueryExpression $filter
     */
    public function setFilter(?SearchQueryExpression $filter): void;
}
