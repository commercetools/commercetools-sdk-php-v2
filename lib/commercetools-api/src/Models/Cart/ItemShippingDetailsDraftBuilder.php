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
 * @implements Builder<ItemShippingDetailsDraft>
 */
final class ItemShippingDetailsDraftBuilder implements Builder
{
    /**

     * @var ?ItemShippingTargetCollection
     */
    private $targets;

    /**
     * <p>Holds information on the quantity of Line Items or Custom Line Items and the address it is shipped.</p>
     * <p>If multiple shipping addresses are present for a Line Item or Custom Line Item, sub-quantities must be specified.</p>
     *

     * @return null|ItemShippingTargetCollection
     */
    public function getTargets()
    {
        return $this->targets;
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
