<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\StateKeyReference;

interface ItemState extends JsonObject
{
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_STATE = 'state';

    /**
     * <p>Number of Line Items or Custom Line Items in this State.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>State of the Line Items or Custom Line Items in a custom workflow. If the referenced <a href="ctp:api:type:State">State</a> does not exist, the <code>state</code> of the <a href="ctp:import:type:ImportOperation">ImportOperation</a> will be set to <code>unresolved</code> until the referenced State is created.</p>
     *

     * @return null|StateKeyReference
     */
    public function getState();

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?StateKeyReference $state
     */
    public function setState(?StateKeyReference $state): void;
}
