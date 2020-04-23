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
final class FacetResultTermModel extends JsonObjectModel implements FacetResultTerm
{
    /**
     * @var ?JsonObject
     */
    protected $term;

    /**
     * @var ?int
     */
    protected $count;

    /**
     * @var ?int
     */
    protected $productCount;


    public function __construct(
        JsonObject $term = null,
        int $count = null,
        int $productCount = null
    ) {
        $this->term = $term;
        $this->count = $count;
        $this->productCount = $productCount;
    }

    /**
     * @return null|JsonObject
     */
    public function getTerm()
    {
        if (is_null($this->term)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(self::FIELD_TERM);
            if (is_null($data)) {
                return null;
            }
            $this->term = JsonObjectModel::of($data);
        }

        return $this->term;
    }

    /**
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


    public function setTerm(?JsonObject $term): void
    {
        $this->term = $term;
    }

    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    public function setProductCount(?int $productCount): void
    {
        $this->productCount = $productCount;
    }
}
