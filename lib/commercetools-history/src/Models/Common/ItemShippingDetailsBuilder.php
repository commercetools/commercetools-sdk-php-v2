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
 * @implements Builder<ItemShippingDetails>
 */
final class ItemShippingDetailsBuilder implements Builder
{
    /**
     * @var ?ItemShippingTargetCollection
     */
    private $targets;

    /**
     * @var ?bool
     */
    private $valid;

    /**
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * <p>true if the quantity of the (custom) line item is equal to the sum of the sub-quantities in <code>targets</code>, <code>false</code> otherwise. A cart cannot be ordered when the value is <code>false</code>. The error InvalidItemShippingDetails will be triggered.</p>
     *
     * @return null|bool
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * @param ?ItemShippingTargetCollection $targets
     * @return $this
     */
    public function withTargets(?ItemShippingTargetCollection $targets)
    {
        $this->targets = $targets;

        return $this;
    }

    /**
     * @param ?bool $valid
     * @return $this
     */
    public function withValid(?bool $valid)
    {
        $this->valid = $valid;

        return $this;
    }


    public function build(): ItemShippingDetails
    {
        return new ItemShippingDetailsModel(
            $this->targets,
            $this->valid
        );
    }

    public static function of(): ItemShippingDetailsBuilder
    {
        return new self();
    }
}
