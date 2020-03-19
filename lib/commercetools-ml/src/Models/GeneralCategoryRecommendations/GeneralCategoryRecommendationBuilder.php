<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\GeneralCategoryRecommendations;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<GeneralCategoryRecommendation>
 */
final class GeneralCategoryRecommendationBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $categoryName;

    /**
     * @var ?int
     */
    private $confidence;

    /**
     * <p>An English category name that is recommended for a product.</p>
     *
     * @return null|string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
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
     * @return $this
     */
    public function withCategoryName(?string $categoryName)
    {
        $this->categoryName = $categoryName;

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


    public function build(): GeneralCategoryRecommendation
    {
        return new GeneralCategoryRecommendationModel(
            $this->categoryName,
            $this->confidence
        );
    }

    public static function of(): GeneralCategoryRecommendationBuilder
    {
        return new self();
    }
}
