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
final class ProductSearchSortingModel extends JsonObjectModel implements ProductSearchSorting
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
    protected $attributeType;

    /**
     *
     * @var ?ProductSearchQueryExpression
     */
    protected $filter;

    /**
     *
     * @var ?bool
     */
    protected $internal;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?string $language = null,
        ?string $order = null,
        ?string $mode = null,
        ?string $attributeType = null,
        ?ProductSearchQueryExpression $filter = null,
        ?bool $internal = null
    ) {
        $this->field = $field;
        $this->language = $language;
        $this->order = $order;
        $this->mode = $mode;
        $this->attributeType = $attributeType;
        $this->filter = $filter;
        $this->internal = $internal;
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
     *
     * @return null|ProductSearchQueryExpression
     */
    public function getFilter()
    {
        if (is_null($this->filter)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FILTER);
            if (is_null($data)) {
                return null;
            }

            $this->filter = ProductSearchQueryExpressionModel::of($data);
        }

        return $this->filter;
    }

    /**
     *
     * @return null|bool
     */
    public function getInternal()
    {
        if (is_null($this->internal)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_INTERNAL);
            if (is_null($data)) {
                return null;
            }
            $this->internal = (bool) $data;
        }

        return $this->internal;
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
     * @param ?string $attributeType
     */
    public function setAttributeType(?string $attributeType): void
    {
        $this->attributeType = $attributeType;
    }

    /**
     * @param ?ProductSearchQueryExpression $filter
     */
    public function setFilter(?ProductSearchQueryExpression $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * @param ?bool $internal
     */
    public function setInternal(?bool $internal): void
    {
        $this->internal = $internal;
    }
}
