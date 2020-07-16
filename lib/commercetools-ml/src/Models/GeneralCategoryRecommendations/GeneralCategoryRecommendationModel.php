<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\GeneralCategoryRecommendations;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GeneralCategoryRecommendationModel extends JsonObjectModel implements GeneralCategoryRecommendation
{
    /**
     * @var ?string
     */
    protected $categoryName;

    /**
     * @var ?float
     */
    protected $confidence;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $categoryName = null,
        ?float $confidence = null
    ) {
        $this->categoryName = $categoryName;
        $this->confidence = $confidence;
    }

    /**
     * <p>An English category name that is recommended for a product.</p>
     *
     * @return null|string
     */
    public function getCategoryName()
    {
        if (is_null($this->categoryName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CATEGORY_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->categoryName = (string) $data;
        }

        return $this->categoryName;
    }

    /**
     * <p>Probability score for the category recommendation.</p>
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
     * @param ?string $categoryName
     */
    public function setCategoryName(?string $categoryName): void
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @param ?float $confidence
     */
    public function setConfidence(?float $confidence): void
    {
        $this->confidence = $confidence;
    }
}
