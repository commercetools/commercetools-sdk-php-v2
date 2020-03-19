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
use Commercetools\Ml\Models\Common\CategoryReference;
use Commercetools\Ml\Models\Common\CategoryReferenceBuilder;

/**
 * @implements Builder<ProjectCategoryRecommendation>
 */
final class ProjectCategoryRecommendationBuilder implements Builder
{
    /**
     * @var null|CategoryReference|CategoryReferenceBuilder
     */
    private $category;

    /**
     * @var ?int
     */
    private $confidence;

    /**
     * @var ?string
     */
    private $path;

    /**
     * <p>A category that is recommended for a product.</p>
     *
     * @return null|CategoryReference
     */
    public function getCategory()
    {
        return $this->category instanceof CategoryReferenceBuilder ? $this->category->build() : $this->category;
    }

    /**
     * <p>Probability score for the category recommendation.</p>
     *
     * @return null|int
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * <p>Breadcrumb path to the recommended category. This only picks up one language, not all available languages for the category. English is prioritized, but if English data is not available, an arbitrary language is selected. Do not use this to identify a category,use the category ID from the category reference instead.</p>
     *
     * @return null|string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return $this
     */
    public function withCategory(?CategoryReference $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return $this
     */
    public function withConfidence(?int $confidence)
    {
        $this->confidence = $confidence;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPath(?string $path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCategoryBuilder(?CategoryReferenceBuilder $category)
    {
        $this->category = $category;

        return $this;
    }

    public function build(): ProjectCategoryRecommendation
    {
        return new ProjectCategoryRecommendationModel(
            $this->category instanceof CategoryReferenceBuilder ? $this->category->build() : $this->category,
            $this->confidence,
            $this->path
        );
    }

    public static function of(): ProjectCategoryRecommendationBuilder
    {
        return new self();
    }
}
