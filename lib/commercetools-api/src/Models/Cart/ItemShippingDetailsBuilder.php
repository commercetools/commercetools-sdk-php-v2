<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ItemShippingDetails>
 */
final class ItemShippingDetailsBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $valid;

    /**
     * @var ?ItemShippingTargetCollection
     */
    private $targets;

    public function __construct()
    {
    }

    /**
     * @return null|bool
     */
    public function getValid()
    {
        return $this->valid;
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
    public function withValid(?bool $valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * @return $this
     */
    public function withTargets(?ItemShippingTargetCollection $targets)
    {
        $this->targets = $targets;

        return $this;
    }

    public function build(): ItemShippingDetails
    {
        return new ItemShippingDetailsModel(
            $this->valid,
            $this->targets
        );
    }

    public static function of(): ItemShippingDetailsBuilder
    {
        return new self();
    }
}
