<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ItemShippingDetailsDraft>
 */
final class ItemShippingDetailsDraftBuilder implements Builder
{
    /**
     * @var ?ItemShippingTargetCollection
     */
    private $targets;

    public function __construct()
    {
    }

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * @return $this
     */
    public function withTargets(?ItemShippingTargetCollection $targets)
    {
        $this->targets = $targets;

        return $this;
    }

    public function build(): ItemShippingDetailsDraft
    {
        return new ItemShippingDetailsDraftModel(
            $this->targets
        );
    }

    public static function of(): ItemShippingDetailsDraftBuilder
    {
        return new self();
    }
}
