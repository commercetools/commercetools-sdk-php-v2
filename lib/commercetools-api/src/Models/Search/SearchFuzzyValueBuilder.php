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
 * @implements Builder<SearchFuzzyValue>
 */
final class SearchFuzzyValueBuilder implements Builder
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
    private $fieldType;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**

     * @var ?int
     */
    private $level;

    /**

     * @var ?string
     */
    private $language;

    /**

     * @var ?string
     */
    private $mustMatch;

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
     * <p>Possible values for the <code>fieldType</code> property on <a href="/../api/search-query-language#simple-expressions">simple expressions</a> indicating the data type of the <code>field</code>.</p>
     *

     * @return null|string
     */
    public function getFieldType()
    {
        return $this->fieldType;
    }

    /**
     * <p>The search term to find fuzzy matches for. If multiple terms are provided (separated by whitespace), the fuzziness level is applied to each term individually.</p>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

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
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * <p>Language of the localized value. Must be provided when the field is of type <code>localizedTextField</code>. The provided Locale must be one of the Project's languages.</p>
     *

     * @return null|string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * <p>Controls whether all of the provided terms must match (<code>all</code>, default) or any of those (<code>any</code>).</p>
     *

     * @return null|string
     */
    public function getMustMatch()
    {
        return $this->mustMatch;
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
     * @param ?string $fieldType
     * @return $this
     */
    public function withFieldType(?string $fieldType)
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?int $level
     * @return $this
     */
    public function withLevel(?int $level)
    {
        $this->level = $level;

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
     * @param ?string $mustMatch
     * @return $this
     */
    public function withMustMatch(?string $mustMatch)
    {
        $this->mustMatch = $mustMatch;

        return $this;
    }


    public function build(): SearchFuzzyValue
    {
        return new SearchFuzzyValueModel(
            $this->field,
            $this->boost,
            $this->fieldType,
            $this->value,
            $this->level,
            $this->language,
            $this->mustMatch
        );
    }

    public static function of(): SearchFuzzyValueBuilder
    {
        return new self();
    }
}
