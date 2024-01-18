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
final class ProductSearchQueryExpressionValueModel extends JsonObjectModel implements ProductSearchQueryExpressionValue
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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $field = null,
        ?float $boost = null,
        ?string $attributeType = null
    ) {
        $this->field = $field;
        $this->boost = $boost;
        $this->attributeType = $attributeType;
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
}
