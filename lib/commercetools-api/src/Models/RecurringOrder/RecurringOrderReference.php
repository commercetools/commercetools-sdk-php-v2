<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface RecurringOrderReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded RecurringOrder.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for RecurringOrders.</p>
     *

     * @return null|RecurringOrder
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:RecurringOrder">RecurringOrder</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?RecurringOrder $obj
     */
    public function setObj(?RecurringOrder $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
