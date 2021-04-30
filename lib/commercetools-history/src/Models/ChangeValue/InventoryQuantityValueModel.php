<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InventoryQuantityValueModel extends JsonObjectModel implements InventoryQuantityValue
{


    /**
     * @var ?int
     */
    protected $quantityOnStock;

    /**
     * @var ?int
     */
    protected $availableQuantity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $quantityOnStock = null,
        ?int $availableQuantity = null
    ) {
        $this->quantityOnStock = $quantityOnStock;
        $this->availableQuantity = $availableQuantity;

    }

    /**
     * @return null|int
     */
    public function getQuantityOnStock()
    {
        if (is_null($this->quantityOnStock)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_QUANTITY_ON_STOCK);
            if (is_null($data)) {
                return null;
            }
            $this->quantityOnStock =  (int) $data;
        }

        return $this->quantityOnStock;
    }

    /**
     * @return null|int
     */
    public function getAvailableQuantity()
    {
        if (is_null($this->availableQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_AVAILABLE_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->availableQuantity =  (int) $data;
        }

        return $this->availableQuantity;
    }


    /**
     * @param ?int $quantityOnStock
     */
    public function setQuantityOnStock(?int $quantityOnStock): void
    {
        $this->quantityOnStock = $quantityOnStock;
    }

    /**
     * @param ?int $availableQuantity
     */
    public function setAvailableQuantity(?int $availableQuantity): void
    {
        $this->availableQuantity = $availableQuantity;
    }



}
