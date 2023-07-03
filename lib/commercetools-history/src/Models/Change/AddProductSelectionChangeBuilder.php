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
use Commercetools\History\Models\Common\ProductSelectionSetting;
use Commercetools\History\Models\Common\ProductSelectionSettingBuilder;

/**
 * @implements Builder<AddProductSelectionChange>
 */
final class AddProductSelectionChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|ProductSelectionSetting|ProductSelectionSettingBuilder
     */
    private $previousValue;

    /**

     * @var null|ProductSelectionSetting|ProductSelectionSettingBuilder
     */
    private $nextValue;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|ProductSelectionSetting
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ProductSelectionSettingBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**

     * @return null|ProductSelectionSetting
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof ProductSelectionSettingBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?ProductSelectionSetting $previousValue
     * @return $this
     */
    public function withPreviousValue(?ProductSelectionSetting $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ProductSelectionSetting $nextValue
     * @return $this
     */
    public function withNextValue(?ProductSelectionSetting $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ProductSelectionSettingBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?ProductSelectionSettingBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddProductSelectionChange
    {
        return new AddProductSelectionChangeModel(
            $this->change,
            $this->previousValue instanceof ProductSelectionSettingBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof ProductSelectionSettingBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddProductSelectionChangeBuilder
    {
        return new self();
    }
}
