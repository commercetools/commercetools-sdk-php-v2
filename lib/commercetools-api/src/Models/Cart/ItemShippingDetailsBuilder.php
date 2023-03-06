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
     * <p>Holds information on the quantity of Line Items or Custom Line Items and the address it is shipped.</p>
     *

     * @return null|ItemShippingTargetCollection
     */
    public function getTargets()
    {
        return $this->targets;
    }

    /**
     * <ul>
     * <li><code>true</code> if the quantity of Line Items or Custom Line Items is equal to the sum of sub-quantities defined in <code>targets</code>.</li>
     * <li><code>false</code> if the quantity of Line Items or Custom Line Items is not equal to the sum of sub-quantities defined in <code>targets</code>.
     * Ordering a Cart when the value is <code>false</code> returns an <a href="ctp:api:type:InvalidItemShippingDetailsError">InvalidItemShippingDetails</a> error.</li>
     * </ul>
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
