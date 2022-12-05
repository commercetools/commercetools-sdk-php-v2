<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

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
     * <p>Used to map what sub-quantity should be shipped to which address.
     * Duplicate address keys are not allowed.</p>
     *

     * @return null|ItemShippingTargetCollection
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * <p><code>true</code> if the quantity of the Line Item or Custom Line Item is equal to the sum of the sub-quantities in <code>targets</code>, else it is <code>false</code>.
     * Ordering a Cart with value as <code>false</code> returns an <a href="ctp:api:type:InvalidItemShippingDetailsError">InvalidItemShippingDetails</a> error.</p>
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
