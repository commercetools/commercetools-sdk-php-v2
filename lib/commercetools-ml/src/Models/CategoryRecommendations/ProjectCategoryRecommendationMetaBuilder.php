<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectCategoryRecommendationMeta>
 */
final class ProjectCategoryRecommendationMetaBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $productName;

    /**
     * @var ?string
     */
    private $productImageUrl;

    /**
     * @var ?array
     */
    private $generalCategoryNames;

    /**
     * <p>The product name that was used to generate recommendations.</p>
     *
     * @return null|string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * <p>The product image that was used to generate recommendations.</p>
     *
     * @return null|string
     */
    public function getProductImageUrl()
    {
        return $this->productImageUrl;
    }

    /**
     * <p>Top 5 general categories that were used internally to generate the project-specific categories. These category names are not related to the categories defined in the project, but they provide additional information to understand the project-specific categories in the results section.</p>
     *
     * @return null|array
     */
    public function getGeneralCategoryNames()
    {
        return $this->generalCategoryNames;
    }

    /**
     * @return $this
     */
    public function withProductName(?string $productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * @return $this
     */
    public function withProductImageUrl(?string $productImageUrl)
    {
        $this->productImageUrl = $productImageUrl;

        return $this;
    }

    /**
     * @return $this
     */
    public function withGeneralCategoryNames(?array $generalCategoryNames)
    {
        $this->generalCategoryNames = $generalCategoryNames;

        return $this;
    }


    public function build(): ProjectCategoryRecommendationMeta
    {
        return new ProjectCategoryRecommendationMetaModel(
            $this->productName,
            $this->productImageUrl,
            $this->generalCategoryNames
        );
    }

    public static function of(): ProjectCategoryRecommendationMetaBuilder
    {
        return new self();
    }
}
