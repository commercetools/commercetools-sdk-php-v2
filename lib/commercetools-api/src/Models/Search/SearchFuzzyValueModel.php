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
final class SearchFuzzyValueModel extends JsonObjectModel implements SearchFuzzyValue
{
    /**
     *
     * @var ?string
     */
    protected $field;

    /**
     *
     * @var ?float
     */
    protected $boost;

    /**
     *
     * @var ?string
     */
    protected $fieldType;

    /**
     *
     * @var ?mixed
     */
    protected $value;

    /**
     *
     * @var ?int
     */
    protected $level;

    /**
     *
     * @var ?string
     */
    protected $language;

    /**
     *
     * @var ?string
     */
    protected $mustMatch;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?float $boost = null,
        ?string $fieldType = null,
        $value = null,
        ?int $level = null,
        ?string $language = null,
        ?string $mustMatch = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->fieldType = $fieldType;
        $this->value = $value;
        $this->level = $level;
        $this->language = $language;
        $this->mustMatch = $mustMatch;
    }

    /**
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
     *
     * @return null|float
     */
    public function getBoost()
    {
        if (is_null($this->boost)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_BOOST);
            if (is_null($data)) {
                return null;
            }
            $this->boost = (float) $data;
        }

        return $this->boost;
    }

    /**
     * <p>Possible values for the <code>fieldType</code> property on <a href="/../api/search-query-language#simple-expressions">simple expressions</a> indicating the data type of the <code>field</code>.</p>
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
     * <p>The search term to find fuzzy matches for. If multiple terms are provided (separated by whitespace), the fuzziness level is applied to each term individually.</p>
     *
     *
     * @return null|mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = $data;
        }

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
     *
     * @return null|int
     */
    public function getLevel()
    {
        if (is_null($this->level)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_LEVEL);
            if (is_null($data)) {
                return null;
            }
            $this->level = (int) $data;
        }

        return $this->level;
    }

    /**
     * <p>Language of the localized value. Must be provided when the field is of type <code>localizedTextField</code>. The provided Locale must be one of the Project's languages.</p>
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
     * <p>Controls whether all of the provided terms must match (<code>all</code>, default) or any of those (<code>any</code>).</p>
     *
     *
     * @return null|string
     */
    public function getMustMatch()
    {
        if (is_null($this->mustMatch)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_MUST_MATCH);
            if (is_null($data)) {
                return null;
            }
            $this->mustMatch = (string) $data;
        }

        return $this->mustMatch;
    }


    /**
     * @param ?string $field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * @param ?float $boost
     */
    public function setBoost(?float $boost): void
    {
        $this->boost = $boost;
    }

    /**
     * @param ?string $fieldType
     */
    public function setFieldType(?string $fieldType): void
    {
        $this->fieldType = $fieldType;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?int $level
     */
    public function setLevel(?int $level): void
    {
        $this->level = $level;
    }

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @param ?string $mustMatch
     */
    public function setMustMatch(?string $mustMatch): void
    {
        $this->mustMatch = $mustMatch;
    }
}
