<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;

/**
 * @implements Builder<StagedOrderRemoveCustomLineItemAction>
 */
final class StagedOrderRemoveCustomLineItemActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $customLineItemId;

    /**
     * @return null|string
     */
    public function getCustomLineItemId()
    {
        return $this->customLineItemId;
    }

    /**
     * @return $this
     */
    public function withCustomLineItemId(?string $customLineItemId)
    {
        $this->customLineItemId = $customLineItemId;

        return $this;
    }

    public function build(): StagedOrderRemoveCustomLineItemAction
    {
        return new StagedOrderRemoveCustomLineItemActionModel(
            $this->customLineItemId
        );
    }

    public static function of(): StagedOrderRemoveCustomLineItemActionBuilder
    {
        return new self();
    }
}
