<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;

interface InventoryEntrySetCustomTypeAction extends InventoryEntryUpdateAction
{

    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>If absent, the custom type and any existing CustomFields are removed.</p>
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>A valid JSON object, based on the FieldDefinitions of the Type.
     * Sets the custom fields to this value.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields();

    public function setType(?TypeResourceIdentifier $type): void;

    public function setFields(?FieldContainer $fields): void;
}
