<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface CartSetCustomLineItemCustomFieldAction extends CartUpdateAction
{

    public const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * @return null|JsonObject
     */
    public function getValue();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setName(?string $name): void;

    public function setValue(?JsonObject $value): void;
}
