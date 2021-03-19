<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<SetImageLabelChange>
 */
final class SetImageLabelChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?string
     */
    private $catalogData;

    /**
     * @var null|Image|ImageBuilder
     */
    private $previousValue;

    /**
     * @var null|Image|ImageBuilder
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setImageLabel</code></p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * @return null|Image
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ImageBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * @return null|Image
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ImageBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?Image $previousValue
     * @return $this
     */
    public function withPreviousValue(?Image $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Image $nextValue
     * @return $this
     */
    public function withNextValue(?Image $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withPreviousValueBuilder(?ImageBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?ImageBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): SetImageLabelChange
    {
        return new SetImageLabelChangeModel(
            $this->change,
            $this->catalogData,
            $this->previousValue instanceof ImageBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ImageBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): SetImageLabelChangeBuilder
    {
        return new self();
    }
}
