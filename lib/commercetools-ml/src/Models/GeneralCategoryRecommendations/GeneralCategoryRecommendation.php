<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\GeneralCategoryRecommendations;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface GeneralCategoryRecommendation extends JsonObject
{

    public const FIELD_CATEGORY_NAME = 'categoryName';
    public const FIELD_CONFIDENCE = 'confidence';

    /**
     * <p>An English category name that is recommended for a product.</p>
     *
     * @return null|string
     */
    public function getCategoryName();

    /**
     * <p>Probability score for the category recommendation.</p>
     *
     * @return null|int
     */
    public function getConfidence();

    public function setCategoryName(?string $categoryName): void;

    public function setConfidence(?int $confidence): void;
}
