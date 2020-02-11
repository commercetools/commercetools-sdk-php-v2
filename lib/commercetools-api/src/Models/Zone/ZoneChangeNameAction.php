<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ZoneChangeNameAction extends ZoneUpdateAction
{

    public const FIELD_NAME = 'name';

    /**
     * @return null|string
     */
    public function getName();

    public function setName(?string $name): void;
}
