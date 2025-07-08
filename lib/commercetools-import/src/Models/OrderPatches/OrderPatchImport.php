<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderPatchImport extends JsonObject
{
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>User-defined unique identifier. If an <a href="ctp:api:type:Order">Order</a> with this <code>orderNumber</code> exists, it is updated with the imported data.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>Each field referenced must be defined in an existing <a href="ctp:api:type:Order">Order</a> or the <a href="ctp:import:type:ImportOperationState">ImportOperationState</a> is set to <code>validationFailed</code>.</p>
     *

     * @return null|OrderField
     */
    public function getFields();

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?OrderField $fields
     */
    public function setFields(?OrderField $fields): void;
}
