<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Search;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface SearchFuzzyValue extends SearchQueryExpressionValue
{
    public const FIELD_VALUE = 'value';
    public const FIELD_LEVEL = 'level';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_MUST_MATCH = 'mustMatch';

    /**
     * <p>The search term to find fuzzy matches for. If multiple terms are provided (separated by whitespace), the fuzziness level is applied to each term individually.</p>
     *

     * @return null|mixed
     */
    public function getValue();

    /**
     * <p>The maximum fuzziness level desired for the search term. Allowed values are <code>0</code>, <code>1</code>, and <code>2</code>. The API automatically adjusts the effective fuzziness level based on the length of the search term if it exceeds the maximum allowed for the given string length according to the following rules:</p>
     * <ul>
     * <li>Terms with 1-2 characters: 0 (exact match)</li>
     * <li>Terms with 3-5 characters: 1 (up to one difference is allowed)</li>
     * <li>Terms with more than 5 characters: 2 (up to two differences are allowed)</li>
     * </ul>
     *

     * @return null|int
     */
    public function getLevel();

    /**
     * <p>Language of the localized value. Must be provided when the field is of type <code>localizedTextField</code>. The provided Locale must be one of the Project's languages.</p>
     *

     * @return null|string
     */
    public function getLanguage();

    /**
     * <p>Controls whether all of the provided terms must match (<code>all</code>, default) or any of those (<code>any</code>).</p>
     *

     * @return null|string
     */
    public function getMustMatch();

    /**
     * @param mixed $value
     */
    public function setValue($value): void;

    /**
     * @param ?int $level
     */
    public function setLevel(?int $level): void;

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void;

    /**
     * @param ?string $mustMatch
     */
    public function setMustMatch(?string $mustMatch): void;
}
