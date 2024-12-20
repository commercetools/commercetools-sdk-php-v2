<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchExactValue extends SearchQueryExpressionValue
{
    public const FIELD_VALUE = 'value';
    public const FIELD_VALUES = 'values';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_CASE_INSENSITIVE = 'caseInsensitive';

    /**

     * @return null|mixed
     */
    public function getValue();

    /**

     * @return null|array
     */
    public function getValues();

    /**
     * <p>String value specifying linguistic and regional preferences using the <a href="https://en.wikipedia.org/wiki/IETF_language_tag">IETF language tag format</a>, as described in <a href="https://www.rfc-editor.org/rfc/bcp/bcp47.txt">BCP 47</a>. The format combines language, script, and region using hyphen-separated subtags. For example: <code>en</code>, <code>en-US</code>, <code>zh-Hans-SG</code>.</p>
     *

     * @return null|string
     */
    public function getLanguage();

    /**

     * @return null|bool
     */
    public function getCaseInsensitive();

    /**
     * @param mixed $value
     */
    public function setValue($value): void;

    /**
     * @param ?array $values
     */
    public function setValues(?array $values): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?bool $caseInsensitive
     */
    public function setCaseInsensitive(?bool $caseInsensitive): void;
}
