<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Ml\Models\Common\CategoryReference;
use Commercetools\Ml\Models\Common\CategoryReferenceModel;

/**
 * @internal
 */
final class ProjectCategoryRecommendationModel extends JsonObjectModel implements ProjectCategoryRecommendation
{

    /**
     * @var ?CategoryReference
     */
    protected $category;

    /**
     * @var ?int
     */
    protected $confidence;

    /**
     * @var ?string
     */
    protected $path;


    public function __construct(
        CategoryReference $category = null,
        int $confidence = null,
        string $path = null
    ) {
        $this->category = $category;
        $this->confidence = $confidence;
        $this->path = $path;

    }

    /**
     * <p>A category that is recommended for a product.</p>
     *
     * @return null|CategoryReference
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProjectCategoryRecommendation::FIELD_CATEGORY);
            if (is_null($data)) {
                return null;
            }

            $this->category = CategoryReferenceModel::of($data);
        }

        return $this->category;
    }

    /**
     * <p>Probability score for the category recommendation.</p>
     *
     * @return null|int
     */
    public function getConfidence()
    {
        if (is_null($this->confidence)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ProjectCategoryRecommendation::FIELD_CONFIDENCE);
            if (is_null($data)) {
                return null;
            }
            $this->confidence = (int) $data;
        }

        return $this->confidence;
    }

    /**
     * <p>Breadcrumb path to the recommended category. This only picks up one language, not all available languages for the category. English is prioritized, but if English data is not available, an arbitrary language is selected. Do not use this to identify a category,use the category ID from the category reference instead.</p>
     *
     * @return null|string
     */
    public function getPath()
    {
        if (is_null($this->path)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProjectCategoryRecommendation::FIELD_PATH);
            if (is_null($data)) {
                return null;
            }
            $this->path = (string) $data;
        }

        return $this->path;
    }

    public function setCategory(?CategoryReference $category): void
    {
        $this->category = $category;
    }

    public function setConfidence(?int $confidence): void
    {
        $this->confidence = $confidence;
    }

    public function setPath(?string $path): void
    {
        $this->path = $path;
    }



}
