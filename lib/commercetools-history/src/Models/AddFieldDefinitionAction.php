<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddFieldDefinitionAction extends Action
{

    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addFieldDefinition</code> on payments</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|FieldDefinition
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?FieldDefinition $nextValue
     */
    public function setNextValue(?FieldDefinition $nextValue): void;
}
