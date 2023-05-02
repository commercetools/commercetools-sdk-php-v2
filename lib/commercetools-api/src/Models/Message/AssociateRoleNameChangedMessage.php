<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleNameChangedMessage extends Message
{
    public const FIELD_NAME = 'name';

    /**
     * <p>Updated name of the <a href="ctp:api:type:AssociateRole">AssociateRole</a>.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;
}
