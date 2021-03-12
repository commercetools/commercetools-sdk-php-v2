<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeFieldDefinitionOrderAction extends Action
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';
    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>changeFieldDefinitionOrder</code> on types</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|FieldDefinitionOrderValueCollection
     */
    public function getPreviousValue();

    /**
     * @return null|FieldDefinitionOrderValueCollection
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?FieldDefinitionOrderValueCollection $previousValue
     */
    public function setPreviousValue(?FieldDefinitionOrderValueCollection $previousValue): void;

    /**
     * @param ?FieldDefinitionOrderValueCollection $nextValue
     */
    public function setNextValue(?FieldDefinitionOrderValueCollection $nextValue): void;
}
