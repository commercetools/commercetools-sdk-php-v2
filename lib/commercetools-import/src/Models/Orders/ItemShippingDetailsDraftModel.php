<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

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
     *
     * @var ?ItemShippingTargetCollection
     */
    protected $targets;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ItemShippingTargetCollection $targets = null
    ) {
        $this->targets = $targets;
    }

    /**
     * <p>Holds information on the quantity of Line Items or Custom Line Items and the address it is shipped.</p>
     *
     *
     * @return null|ItemShippingTargetCollection
     */
    public function getTargets()
    {
        if (is_null($this->targets)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_TARGETS);
            if (is_null($data)) {
                return null;
            }
            $this->targets = ItemShippingTargetCollection::fromArray($data);
        }

        return $this->targets;
    }


    /**
     * @param ?ItemShippingTargetCollection $targets
     */
    public function setTargets(?ItemShippingTargetCollection $targets): void
    {
        $this->targets = $targets;
    }
}
