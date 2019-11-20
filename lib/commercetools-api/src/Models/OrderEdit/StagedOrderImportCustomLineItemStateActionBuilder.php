<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\ItemStateCollection;
use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderImportCustomLineItemStateAction>
 */
final class StagedOrderImportCustomLineItemStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @var ?ItemStateCollection
     */
    private $state;

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return null|ItemStateCollection
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?ItemStateCollection $state)
    {
        $this->state = $state;

        return $this;
    }

    public function build(): StagedOrderImportCustomLineItemStateAction
    {
        return new StagedOrderImportCustomLineItemStateActionModel(
            $this->customLineItemId,
            $this->state
        );
    }

    public static function of(): StagedOrderImportCustomLineItemStateActionBuilder
    {
        return new self();
    }
}
