<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectCategoryRecommendationMeta extends JsonObject
{
    public const FIELD_PRODUCT_NAME = 'productName';
    public const FIELD_PRODUCT_IMAGE_URL = 'productImageUrl';
    public const FIELD_GENERAL_CATEGORY_NAMES = 'generalCategoryNames';

    /**
     * <p>The product name that was used to generate recommendations.</p>
     *

     * @return null|string
     */
    public function getProductName();

    /**
     * <p>The product image that was used to generate recommendations.</p>
     *

     * @return null|string
     */
    public function getProductImageUrl();

    /**
     * <p>Top 5 general categories that were used internally to generate the project-specific categories. These category names are not related to the categories defined in the project, but they provide additional information to understand the project-specific categories in the results section.</p>
     *

     * @return null|array
     */
    public function getGeneralCategoryNames();

    /**
     * @param ?string $productName
     */
    public function setProductName(?string $productName): void;

    /**
     * @param ?string $productImageUrl
     */
    public function setProductImageUrl(?string $productImageUrl): void;

    /**
     * @param ?array $generalCategoryNames
     */
    public function setGeneralCategoryNames(?array $generalCategoryNames): void;
}
