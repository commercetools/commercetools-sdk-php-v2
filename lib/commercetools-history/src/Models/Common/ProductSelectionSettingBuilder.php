<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSelectionSetting>
 */
final class ProductSelectionSettingBuilder implements Builder
{
    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $productSelection;

    /**

     * @var ?bool
     */
    private $active;

    /**

     * @return null|Reference
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ReferenceBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**

     * @return null|bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param ?Reference $productSelection
     * @return $this
     */
    public function withProductSelection(?Reference $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    /**
     * @param ?bool $active
     * @return $this
     */
    public function withActive(?bool $active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ReferenceBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): ProductSelectionSetting
    {
        return new ProductSelectionSettingModel(
            $this->productSelection instanceof ReferenceBuilder ? $this->productSelection->build() : $this->productSelection,
            $this->active
        );
    }

    public static function of(): ProductSelectionSettingBuilder
    {
        return new self();
    }
}
