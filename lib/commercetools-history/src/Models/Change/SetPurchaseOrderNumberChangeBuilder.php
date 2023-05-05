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

/**
 * @implements Builder<SetPurchaseOrderNumberChange>
 */
final class SetPurchaseOrderNumberChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $previousValue;

    /**

     * @var ?string
     */
    private $nextValue;

    /**
     * <p>Update action for <code>setPurchaseOrderNumber</code>.</p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Purchase Order number prior to the update action.</p>
     *

     * @return null|string
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Purchase Order number after the update action.</p>
     *

     * @return null|string
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
     * @param ?string $previousValue
     * @return $this
     */
    public function withPreviousValue(?string $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?string $nextValue
     * @return $this
     */
    public function withNextValue(?string $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetPurchaseOrderNumberChange
    {
        return new SetPurchaseOrderNumberChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetPurchaseOrderNumberChangeBuilder
    {
        return new self();
    }
}
