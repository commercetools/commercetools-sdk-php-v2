<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ChangeTargetCustomLineItemsActionValue extends ChangeTargetActionValue
{

    public const FIELD_PREDICATE = 'predicate';

    /**
     * @return null|string
     */
    public function getType();

    /**
     * @return null|string
     */
    public function getPredicate();

    /**
     * @param ?string $predicate
     */
    public function setPredicate(?string $predicate): void;
}
