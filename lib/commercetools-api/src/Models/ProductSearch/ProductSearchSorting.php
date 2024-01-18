<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchSorting extends JsonObject
{
    public const FIELD_FIELD = 'field';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_ORDER = 'order';
    public const FIELD_MODE = 'mode';
    public const FIELD_ATTRIBUTE_TYPE = 'attributeType';
    public const FIELD_FILTER = 'filter';
    public const FIELD_INTERNAL = 'internal';

    /**

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

     * @return null|string
     */
    public function getOrder();

    /**

     * @return null|string
     */
    public function getMode();

    /**

     * @return null|string
     */
    public function getAttributeType();

    /**

     * @return null|ProductSearchQueryExpression
     */
    public function getFilter();

    /**

     * @return null|bool
     */
    public function getInternal();

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
     * @param ?string $attributeType
     */
    public function setAttributeType(?string $attributeType): void;

    /**
     * @param ?ProductSearchQueryExpression $filter
     */
    public function setFilter(?ProductSearchQueryExpression $filter): void;

    /**
     * @param ?bool $internal
     */
    public function setInternal(?bool $internal): void;
}
