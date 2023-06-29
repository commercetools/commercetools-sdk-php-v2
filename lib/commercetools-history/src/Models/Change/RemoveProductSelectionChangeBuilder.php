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
 * @implements Builder<RemoveProductSelectionChange>
 */
final class RemoveProductSelectionChangeBuilder implements Builder
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

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|ProductSelectionSetting
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof ProductSelectionSettingBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?ProductSelectionSettingBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveProductSelectionChange
    {
        return new RemoveProductSelectionChangeModel(
            $this->change,
            $this->previousValue instanceof ProductSelectionSettingBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveProductSelectionChangeBuilder
    {
        return new self();
    }
}
