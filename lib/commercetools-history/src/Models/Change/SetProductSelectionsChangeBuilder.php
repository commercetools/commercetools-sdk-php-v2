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
use Commercetools\History\Models\Common\ProductSelectionSettingCollection;

/**
 * @implements Builder<SetProductSelectionsChange>
 */
final class SetProductSelectionsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $previousValue;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setProductSelections</code></p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**

     * @return null|ProductSelectionSettingCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?ProductSelectionSettingCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?ProductSelectionSettingCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ProductSelectionSettingCollection $nextValue
     * @return $this
     */
    public function withNextValue(?ProductSelectionSettingCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetProductSelectionsChange
    {
        return new SetProductSelectionsChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetProductSelectionsChangeBuilder
    {
        return new self();
    }
}
