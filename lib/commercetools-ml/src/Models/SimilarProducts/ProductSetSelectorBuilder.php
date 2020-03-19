<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetSelector>
 */
final class ProductSetSelectorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $projectKey;

    /**
     * @var ?array
     */
    private $productIds;

    /**
     * @var ?array
     */
    private $productTypeIds;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @var ?bool
     */
    private $includeVariants;

    /**
     * @var ?int
     */
    private $productSetLimit;

    /**
     * <p>The project containing the project set.</p>
     *
     * @return null|string
     */
    public function getProjectKey()
    {
        return $this->projectKey;
    }

    /**
     * <p>An array of Product IDs to compare. If unspecified, no Product ID filter is applied.</p>
     *
     * @return null|array
     */
    public function getProductIds()
    {
        return $this->productIds;
    }

    /**
     * <p>An array of product type IDs. Only products with product types in this array are compared. If unspecified, no product type filter is applied.</p>
     *
     * @return null|array
     */
    public function getProductTypeIds()
    {
        return $this->productTypeIds;
    }

    /**
     * <p>Specifies use of staged or current product data.</p>
     *
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * <p>Specifies use of product variants. If set to <code>true</code>, all product variants are compared, not just the master variant.</p>
     *
     * @return null|bool
     */
    public function getIncludeVariants()
    {
        return $this->includeVariants;
    }

    /**
     * <p>Maximum number of products to check (if unspecified, all products are considered). Note that the maximum number of product comparisons between two productSets is 20,000,000. This limit cannot be exceeded. If you need a higher limit, contact https://support.commercetools.com</p>
     *
     * @return null|int
     */
    public function getProductSetLimit()
    {
        return $this->productSetLimit;
    }

    /**
     * @return $this
     */
    public function withProjectKey(?string $projectKey)
    {
        $this->projectKey = $projectKey;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductIds(?array $productIds)
    {
        $this->productIds = $productIds;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductTypeIds(?array $productTypeIds)
    {
        $this->productTypeIds = $productTypeIds;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    /**
     * @return $this
     */
    public function withIncludeVariants(?bool $includeVariants)
    {
        $this->includeVariants = $includeVariants;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductSetLimit(?int $productSetLimit)
    {
        $this->productSetLimit = $productSetLimit;

        return $this;
    }


    public function build(): ProductSetSelector
    {
        return new ProductSetSelectorModel(
            $this->projectKey,
            $this->productIds,
            $this->productTypeIds,
            $this->staged,
            $this->includeVariants,
            $this->productSetLimit
        );
    }

    public static function of(): ProductSetSelectorBuilder
    {
        return new self();
    }
}
