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
final class FilteredFacetResultModel extends JsonObjectModel implements FilteredFacetResult
{
    public const DISCRIMINATOR_VALUE = 'filter';
    /**
     *
     * @var ?string
     */
    protected $type;

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
        ?int $count = null,
        ?int $productCount = null,
        ?string $type = null
    ) {
        $this->count = $count;
        $this->productCount = $productCount;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>Number of <a href="ctp:api:type:ProductVariant">ProductVariants</a> matching the value specified in <a href="/../api/projects/product-projection-search#filtered-facet-expression">filtered facet expression</a>.</p>
     *
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
     * <p>Number of <a href="ctp:api:type:Product">Products</a> matching the value specified in <a href="/../api/projects/product-projection-search#filtered-facet-expression">filtered facet expression</a>.</p>
     * <p>Present only if the <code>counting products</code> <a href="/projects/product-projection-search#counting-products">extension</a> is enabled.</p>
     *
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
