<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\AttributeDefinition;

interface RemoveAttributeDefinitionChange extends Change
{

    public const FIELD_PREVIOUS_VALUE = 'previousValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>removeAttributeDefinition</code> on product types</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|AttributeDefinition
     */
    public function getPreviousValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?AttributeDefinition $previousValue
     */
    public function setPreviousValue(?AttributeDefinition $previousValue): void;
}
