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
use Commercetools\Import\Models\Common\StateKeyReference;
use Commercetools\Import\Models\Common\StateKeyReferenceModel;
use stdClass;

/**
 * @internal
 */
final class ItemStateModel extends JsonObjectModel implements ItemState
{
    /**
     *
     * @var ?float
     */
    protected $quantity;

    /**
     *
     * @var ?StateKeyReference
     */
    protected $state;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?float $quantity = null,
        ?StateKeyReference $state = null
    ) {
        $this->quantity = $quantity;
        $this->state = $state;
    }

    /**
     *
     * @return null|float
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (float) $data;
        }

        return $this->quantity;
    }

    /**
     * <p>Maps to <code>ItemState.state</code>.</p>
     *
     *
     * @return null|StateKeyReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateKeyReferenceModel::of($data);
        }

        return $this->state;
    }


    /**
     * @param ?float $quantity
     */
    public function setQuantity(?float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @param ?StateKeyReference $state
     */
    public function setState(?StateKeyReference $state): void
    {
        $this->state = $state;
    }
}
