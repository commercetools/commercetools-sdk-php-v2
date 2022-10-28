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
use Commercetools\Ml\Models\Common\CategoryReference;
use Commercetools\Ml\Models\Common\CategoryReferenceModel;
use stdClass;

/**
 * @internal
 */
final class ProjectCategoryRecommendationModel extends JsonObjectModel implements ProjectCategoryRecommendation
{
    /**
     *
     * @var ?CategoryReference
     */
    protected $category;

    /**
     *
     * @var ?float
     */
    protected $confidence;

    /**
     *
     * @var ?string
     */
    protected $path;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?CategoryReference $category = null,
        ?float $confidence = null,
        ?string $path = null
    ) {
        $this->category = $category;
        $this->confidence = $confidence;
        $this->path = $path;
    }

    /**
     * <p>A category that is recommended for a product.</p>
     *
     *
     * @return null|CategoryReference
     */
    public function getCategory()
    {
        if (is_null($this->category)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CATEGORY);
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
     *
     * @return null|float
     */
    public function getConfidence()
    {
        if (is_null($this->confidence)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_CONFIDENCE);
            if (is_null($data)) {
                return null;
            }
            $this->confidence = (float) $data;
        }

        return $this->confidence;
    }

    /**
     * <p>Breadcrumb path to the recommended category. This only picks up one language, not all available languages for the category. English is prioritized, but if English data is not available, an arbitrary language is selected. Do not use this to identify a category,use the category ID from the category reference instead.</p>
     *
     *
     * @return null|string
     */
    public function getPath()
    {
        if (is_null($this->path)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PATH);
            if (is_null($data)) {
                return null;
            }
            $this->path = (string) $data;
        }

        return $this->path;
    }


    /**
     * @param ?CategoryReference $category
     */
    public function setCategory(?CategoryReference $category): void
    {
        $this->category = $category;
    }

    /**
     * @param ?float $confidence
     */
    public function setConfidence(?float $confidence): void
    {
        $this->confidence = $confidence;
    }

    /**
     * @param ?string $path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }
}
