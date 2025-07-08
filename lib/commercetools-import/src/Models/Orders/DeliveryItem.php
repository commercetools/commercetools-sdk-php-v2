<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryItem extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_QUANTITY = 'quantity';

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:LineItem">LineItem</a> or <a href="ctp:api:type:CustomLineItem">CustomLineItem</a> delivered.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>Number of Line Items or Custom Line Items delivered.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;
}
