<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ItemShippingDetailsDraftModel extends JsonObjectModel implements ItemShippingDetailsDraft
{
    /**
     * @var ?ItemShippingTargetCollection
     */
    protected $targets;


    public function __construct(
        ItemShippingTargetCollection $targets = null
    ) {
        $this->targets = $targets;
    }

    /**
     * <p>Used to capture one or more (custom) line item specific shipping addresses.
     * By specifying sub-quantities, it is possible to set multiple shipping addresses for one line item.
     * A cart can have <code>shippingDetails</code> where the <code>targets</code> sum does not match the quantity of the line item or custom line item.
     * For the order creation and order updates the <code>targets</code> sum must match the quantity.</p>
     *
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets()
    {
        if (is_null($this->targets)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_TARGETS);
            if (is_null($data)) {
                return null;
            }
            $this->targets = ItemShippingTargetCollection::fromArray($data);
        }

        return $this->targets;
    }


    public function setTargets(?ItemShippingTargetCollection $targets): void
    {
        $this->targets = $targets;
    }
}
