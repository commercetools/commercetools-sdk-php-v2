<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchExistsValueModel extends JsonObjectModel implements ProductSearchExistsValue
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
    protected $attributeType;

    /**
     *
     * @var ?string
     */
    protected $language;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?float $boost = null,
        ?string $attributeType = null,
        ?string $language = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->attributeType = $attributeType;
        $this->language = $language;
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
     *
     * @return null|string
     */
    public function getAttributeType()
    {
        if (is_null($this->attributeType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->attributeType = (string) $data;
        }

        return $this->attributeType;
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
     * @param ?string $attributeType
     */
    public function setAttributeType(?string $attributeType): void
    {
        $this->attributeType = $attributeType;
    }

    /**
     * @param ?string $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }
}
