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
 * @implements Builder<ProductSearchFullTextValue>
 */
final class ProductSearchFullTextValueBuilder implements Builder
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
    private $attributeType;

    /**

     * @var null|mixed|mixed
     */
    private $value;

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

     * @return null|string
     */
    public function getAttributeType()
    {
        return $this->attributeType;
    }

    /**

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
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
     * @param ?string $attributeType
     * @return $this
     */
    public function withAttributeType(?string $attributeType)
    {
        $this->attributeType = $attributeType;

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


    public function build(): ProductSearchFullTextValue
    {
        return new ProductSearchFullTextValueModel(
            $this->field,
            $this->boost,
            $this->attributeType,
            $this->value,
            $this->language,
            $this->mustMatch
        );
    }

    public static function of(): ProductSearchFullTextValueBuilder
    {
        return new self();
    }
}
