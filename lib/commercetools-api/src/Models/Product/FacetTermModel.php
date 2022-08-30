<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class FacetTermModel extends JsonObjectModel implements FacetTerm
{
    /**
     *
     * @var ?mixed
     */
    protected $term;

    /**
     *
     * @var ?int
     */
    protected $count;

    /**
     *
     * @var ?int
     */
    protected $productCount;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        $term = null,
        ?int $count = null,
        ?int $productCount = null
    ) {
        $this->term = $term;
        $this->count = $count;
        $this->productCount = $productCount;
    }

    /**
     *
     * @return null|mixed
     */
    public function getTerm()
    {
        if (is_null($this->term)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_TERM);
            if (is_null($data)) {
                return null;
            }
            $this->term = $data;
        }

        return $this->term;
    }

    /**
     *
     * @return null|int
     */
    public function getCount()
    {
        if (is_null($this->count)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->count = (int) $data;
        }

        return $this->count;
    }

    /**
     *
     * @return null|int
     */
    public function getProductCount()
    {
        if (is_null($this->productCount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PRODUCT_COUNT);
            if (is_null($data)) {
                return null;
            }
            $this->productCount = (int) $data;
        }

        return $this->productCount;
    }


    /**
     * @param mixed $term
     */
    public function setTerm($term): void
    {
        $this->term = $term;
    }

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @param ?int $productCount
     */
    public function setProductCount(?int $productCount): void
    {
        $this->productCount = $productCount;
    }
}
