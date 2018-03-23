<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonObject;

interface DeliveryItem extends JsonObject {
    const FIELD_ID = 'id';
    const FIELD_QUANTITY = 'quantity';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

}
