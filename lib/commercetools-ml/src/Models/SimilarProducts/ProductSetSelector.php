<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\SimilarProducts;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetSelector extends JsonObject
{
    public const FIELD_PROJECT_KEY = 'projectKey';
    public const FIELD_PRODUCT_IDS = 'productIds';
    public const FIELD_PRODUCT_TYPE_IDS = 'productTypeIds';
    public const FIELD_STAGED = 'staged';
    public const FIELD_INCLUDE_VARIANTS = 'includeVariants';
    public const FIELD_PRODUCT_SET_LIMIT = 'productSetLimit';

    /**
     * <p>The project containing the project set.</p>
     *

     * @return null|string
     */
    public function getProjectKey();

    /**
     * <p>An array of Product IDs to compare. If unspecified, no Product ID filter is applied.</p>
     *

     * @return null|array
     */
    public function getProductIds();

    /**
     * <p>An array of product type IDs. Only products with product types in this array are compared. If unspecified, no product type filter is applied.</p>
     *

     * @return null|array
     */
    public function getProductTypeIds();

    /**
     * <p>Specifies use of staged or current product data.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * <p>Specifies use of product variants. If set to <code>true</code>, all product variants are compared, not just the master variant.</p>
     *

     * @return null|bool
     */
    public function getIncludeVariants();

    /**
     * <p>Maximum number of products to check (if unspecified, all products are considered). Note that the maximum number of product comparisons between two productSets is 20,000,000. This limit cannot be exceeded. If you need a higher limit, contact https://support.commercetools.com</p>
     *

     * @return null|int
     */
    public function getProductSetLimit();

    /**
     * @param ?string $projectKey
     */
    public function setProjectKey(?string $projectKey): void;

    /**
     * @param ?array $productIds
     */
    public function setProductIds(?array $productIds): void;

    /**
     * @param ?array $productTypeIds
     */
    public function setProductTypeIds(?array $productTypeIds): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;

    /**
     * @param ?bool $includeVariants
     */
    public function setIncludeVariants(?bool $includeVariants): void;

    /**
     * @param ?int $productSetLimit
     */
    public function setProductSetLimit(?int $productSetLimit): void;
}
