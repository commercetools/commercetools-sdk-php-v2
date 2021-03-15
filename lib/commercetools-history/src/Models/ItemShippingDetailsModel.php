<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ItemShippingDetailsModel extends JsonObjectModel implements ItemShippingDetails
{

    /**
     * @var ?ItemShippingTargetCollection
     */
    protected $targets;

    /**
     * @var ?bool
     */
    protected $valid;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ItemShippingTargetCollection $targets = null,
        ?bool $valid = null
    ) {
        $this->targets = $targets;
        $this->valid = $valid;

    }

    /**
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
            $this->targets =  ItemShippingTargetCollection::fromArray($data);
        }

        return $this->targets;
    }

    /**
     * <p>true if the quantity of the (custom) line item is equal to the sum of the sub-quantities in <code>targets</code>, <code>false</code> otherwise. A cart cannot be ordered when the value is <code>false</code>. The error InvalidItemShippingDetails will be triggered.</p>
     *
     * @return null|bool
     */
    public function getValid()
    {
        if (is_null($this->valid)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_VALID);
            if (is_null($data)) {
                return null;
            }
            $this->valid =  (bool) $data;
        }

        return $this->valid;
    }


    /**
     * @param ?ItemShippingTargetCollection $targets
     */
    public function setTargets(?ItemShippingTargetCollection $targets): void
    {
        $this->targets = $targets;
    }

    /**
     * @param ?bool $valid
     */
    public function setValid(?bool $valid): void
    {
        $this->valid = $valid;
    }



}
