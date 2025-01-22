<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Product\ProductProjection;
use Commercetools\Api\Models\Product\ProductProjectionModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchResultModel extends JsonObjectModel implements ProductSearchResult
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?ProductSearchMatchingVariants
     */
    protected $matchingVariants;

    /**
     *
     * @var ?ProductProjection
     */
    protected $productProjection;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?ProductSearchMatchingVariants $matchingVariants = null,
        ?ProductProjection $productProjection = null
    ) {
        $this->id = $id;
        $this->matchingVariants = $matchingVariants;
        $this->productProjection = $productProjection;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Product">Product</a> that matches the search query.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Information about which Product Variants match the search query.
     * Only present if <code>markMatchingVariants</code> is set to <code>true</code> in the <a href="ctp:api:type:ProductSearchRequest">ProductSearchRequest</a>.</p>
     *
     *
     * @return null|ProductSearchMatchingVariants
     */
    public function getMatchingVariants()
    {
        if (is_null($this->matchingVariants)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_MATCHING_VARIANTS);
            if (is_null($data)) {
                return null;
            }

            $this->matchingVariants = ProductSearchMatchingVariantsModel::of($data);
        }

        return $this->matchingVariants;
    }

    /**
     * <p>Projected data of the Product with <code>id</code>.
     * Only present if data integration <a href="/../api/projects/product-search#with-product-projection-parameters">with Product Projection parameters</a> is requested.</p>
     *
     *
     * @return null|ProductProjection
     */
    public function getProductProjection()
    {
        if (is_null($this->productProjection)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT_PROJECTION);
            if (is_null($data)) {
                return null;
            }

            $this->productProjection = ProductProjectionModel::of($data);
        }

        return $this->productProjection;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?ProductSearchMatchingVariants $matchingVariants
     */
    public function setMatchingVariants(?ProductSearchMatchingVariants $matchingVariants): void
    {
        $this->matchingVariants = $matchingVariants;
    }

    /**
     * @param ?ProductProjection $productProjection
     */
    public function setProductProjection(?ProductProjection $productProjection): void
    {
        $this->productProjection = $productProjection;
    }
}
