<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

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
     * <p>Maps to <code>ItemShippingDetailsDraft.targets</code>.</p>
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
