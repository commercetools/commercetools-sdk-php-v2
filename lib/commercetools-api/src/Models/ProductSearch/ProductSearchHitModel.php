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
final class ProductSearchHitModel extends JsonObjectModel implements ProductSearchHit
{
    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?ProductProjection
     */
    protected $productProjection;

    /**
     *
     * @var ?ProductSearchMatchingVariantCollection
     */
    protected $matchingVariants;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?ProductProjection $productProjection = null,
        ?ProductSearchMatchingVariantCollection $matchingVariants = null
    ) {
        $this->id = $id;
        $this->productProjection = $productProjection;
        $this->matchingVariants = $matchingVariants;
    }

    /**
     * <p>Unique identifier of the Product.</p>
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
     * <p>Contains Product Projection data for Products matching the <code>projection</code> field in the Search Products request.</p>
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
     * <p>Contains a list of identifiers (id and SKU) of the matching variants.</p>
     *
     *
     * @return null|ProductSearchMatchingVariantCollection
     */
    public function getMatchingVariants()
    {
        if (is_null($this->matchingVariants)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MATCHING_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->matchingVariants = ProductSearchMatchingVariantCollection::fromArray($data);
        }

        return $this->matchingVariants;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?ProductProjection $productProjection
     */
    public function setProductProjection(?ProductProjection $productProjection): void
    {
        $this->productProjection = $productProjection;
    }

    /**
     * @param ?ProductSearchMatchingVariantCollection $matchingVariants
     */
    public function setMatchingVariants(?ProductSearchMatchingVariantCollection $matchingVariants): void
    {
        $this->matchingVariants = $matchingVariants;
    }
}
