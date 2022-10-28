<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class SimilarityMeasuresModel extends JsonObjectModel implements SimilarityMeasures
{
    /**
     *
     * @var ?int
     */
    protected $name;

    /**
     *
     * @var ?int
     */
    protected $description;

    /**
     *
     * @var ?int
     */
    protected $attribute;

    /**
     *
     * @var ?int
     */
    protected $variantCount;

    /**
     *
     * @var ?int
     */
    protected $price;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $name = null,
        ?int $description = null,
        ?int $attribute = null,
        ?int $variantCount = null,
        ?int $price = null
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->attribute = $attribute;
        $this->variantCount = $variantCount;
        $this->price = $price;
    }

    /**
     * <p>Importance of the <code>name</code> attribute in overall similarity.</p>
     *
     *
     * @return null|int
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (int) $data;
        }

        return $this->name;
    }

    /**
     * <p>Importance of the <code>description</code> attribute in overall similarity.</p>
     *
     *
     * @return null|int
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }
            $this->description = (int) $data;
        }

        return $this->description;
    }

    /**
     * <p>Importance of the <code>description</code> attribute in overall similarity.</p>
     *
     *
     * @return null|int
     */
    public function getAttribute()
    {
        if (is_null($this->attribute)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE);
            if (is_null($data)) {
                return null;
            }
            $this->attribute = (int) $data;
        }

        return $this->attribute;
    }

    /**
     * <p>Importance of the number of product variants in overall similarity.</p>
     *
     *
     * @return null|int
     */
    public function getVariantCount()
    {
        if (is_null($this->variantCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->variantCount = (int) $data;
        }

        return $this->variantCount;
    }

    /**
     * <p>Importance of the <code>price</code> attribute in overall similarity.</p>
     *
     *
     * @return null|int
     */
    public function getPrice()
    {
        if (is_null($this->price)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PRICE);
            if (is_null($data)) {
                return null;
            }
            $this->price = (int) $data;
        }

        return $this->price;
    }


    /**
     * @param ?int $name
     */
    public function setName(?int $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?int $description
     */
    public function setDescription(?int $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?int $attribute
     */
    public function setAttribute(?int $attribute): void
    {
        $this->attribute = $attribute;
    }

    /**
     * @param ?int $variantCount
     */
    public function setVariantCount(?int $variantCount): void
    {
        $this->variantCount = $variantCount;
    }

    /**
     * @param ?int $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }
}
