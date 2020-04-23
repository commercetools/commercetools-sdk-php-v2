<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\CategoryRecommendations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Ml\Models\Common\CategoryReference;

interface ProjectCategoryRecommendation extends JsonObject
{
    public const FIELD_CATEGORY = 'category';
    public const FIELD_CONFIDENCE = 'confidence';
    public const FIELD_PATH = 'path';

    /**
     * <p>A category that is recommended for a product.</p>
     *
     * @return null|CategoryReference
     */
    public function getCategory();

    /**
     * <p>Probability score for the category recommendation.</p>
     *
     * @return null|float
     */
    public function getConfidence();

    /**
     * <p>Breadcrumb path to the recommended category. This only picks up one language, not all available languages for the category. English is prioritized, but if English data is not available, an arbitrary language is selected. Do not use this to identify a category,use the category ID from the category reference instead.</p>
     *
     * @return null|string
     */
    public function getPath();

    public function setCategory(?CategoryReference $category): void;

    public function setConfidence(?float $confidence): void;

    public function setPath(?string $path): void;
}
