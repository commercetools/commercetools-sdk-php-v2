<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\JsonObject;

interface OrderEditSetCustomTypeAction extends OrderEditUpdateAction
{
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * @return null|JsonObject
     */
    public function getFields();

    public function setType(?TypeResourceIdentifier $type): void;

    public function setFields(?JsonObject $fields): void;
}
