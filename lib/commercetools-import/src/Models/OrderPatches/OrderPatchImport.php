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
     * <p>Maps to <code>Order.orderNumber</code>, String that uniquely identifies an order, unique across a project.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>Each field referenced must be defined in an already existing order in the project or the import operation state is set to <code>validationFailed</code>.</p>
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
