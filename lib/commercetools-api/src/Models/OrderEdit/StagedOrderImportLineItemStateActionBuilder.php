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
 * @implements Builder<StagedOrderImportLineItemStateAction>
 */
final class StagedOrderImportLineItemStateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $lineItemId;

    /**
     * @var ?ItemStateCollection
     */
    private $state;

    /**
     * @return null|string
     */
    public function getLineItemId()
    {
        return $this->lineItemId;
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
    public function withLineItemId(?string $lineItemId)
    {
        $this->lineItemId = $lineItemId;

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

    public function build(): StagedOrderImportLineItemStateAction
    {
        return new StagedOrderImportLineItemStateActionModel(
            $this->lineItemId,
            $this->state
        );
    }

    public static function of(): StagedOrderImportLineItemStateActionBuilder
    {
        return new self();
    }
}
