<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface AddAttributeDefinitionAction extends Action
{

    public const FIELD_NEXT_VALUE = 'nextValue';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * <p>Update action for <code>addAttributeDefinition</code> on product types</p>
     *
     * @return null|string
     */
    public function getChange();

    /**
     * @return null|AttributeDefinition
     */
    public function getNextValue();

    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void;

    /**
     * @param ?AttributeDefinition $nextValue
     */
    public function setNextValue(?AttributeDefinition $nextValue): void;
}
