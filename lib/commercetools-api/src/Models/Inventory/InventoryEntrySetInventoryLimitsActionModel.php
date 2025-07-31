<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryEntrySetInventoryLimitsActionModel extends JsonObjectModel implements InventoryEntrySetInventoryLimitsAction
{
    public const DISCRIMINATOR_VALUE = 'setInventoryLimits';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?int
     */
    protected $minCartQuantity;

    /**
     *
     * @var ?int
     */
    protected $maxCartQuantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $minCartQuantity = null,
        ?int $maxCartQuantity = null,
        ?string $action = null
    ) {
        $this->minCartQuantity = $minCartQuantity;
        $this->maxCartQuantity = $maxCartQuantity;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Sets the minimum quantity that can be added to a Cart. If the value is absent or <code>null</code>
     * the inventory limit is removed.</p>
     *
     *
     * @return null|int
     */
    public function getMinCartQuantity()
    {
        if (is_null($this->minCartQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MIN_CART_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->minCartQuantity = (int) $data;
        }

        return $this->minCartQuantity;
    }

    /**
     * <p>Sets the maximum quantity that can be added to a Cart. If the value is absent or <code>null</code>
     * the inventory limit is removed.</p>
     *
     *
     * @return null|int
     */
    public function getMaxCartQuantity()
    {
        if (is_null($this->maxCartQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MAX_CART_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->maxCartQuantity = (int) $data;
        }

        return $this->maxCartQuantity;
    }


    /**
     * @param ?int $minCartQuantity
     */
    public function setMinCartQuantity(?int $minCartQuantity): void
    {
        $this->minCartQuantity = $minCartQuantity;
    }

    /**
     * @param ?int $maxCartQuantity
     */
    public function setMaxCartQuantity(?int $maxCartQuantity): void
    {
        $this->maxCartQuantity = $maxCartQuantity;
    }
}
