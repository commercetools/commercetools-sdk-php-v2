<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\Variant;
use Commercetools\History\Models\Common\VariantBuilder;

/**
 * @implements Builder<RemoveVariantChange>
 */
final class RemoveVariantChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Variant|VariantBuilder
     */
    private $previousValue;

    /**

     * @var null|Variant|VariantBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $catalogData;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|Variant
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof VariantBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|Variant
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof VariantBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
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
     * @param ?Variant $previousValue
     * @return $this
     */
    public function withPreviousValue(?Variant $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?Variant $nextValue
     * @return $this
     */
    public function withNextValue(?Variant $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?VariantBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?VariantBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): RemoveVariantChange
    {
        return new RemoveVariantChangeModel(
            $this->change,
            $this->previousValue instanceof VariantBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof VariantBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->catalogData
        );
    }

    public static function of(): RemoveVariantChangeBuilder
    {
        return new self();
    }
}
