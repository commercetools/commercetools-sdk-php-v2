<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface RemoveFieldDefinitionAction extends Action
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>removeFieldDefinition</code> on payments</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|FieldDefinition
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?FieldDefinition $previousValue
     */
    public function setPreviousValue(?FieldDefinition $previousValue): void;
}
