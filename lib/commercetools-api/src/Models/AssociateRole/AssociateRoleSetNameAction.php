<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AssociateRole;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AssociateRoleSetNameAction extends AssociateRoleUpdateAction
{
    public const FIELD_NAME = 'name';

    /**
     * <p>New name to set.
     * If <code>name</code> is absent or <code>null</code>, the existing name, if any, will be removed.</p>
     *

     * @return null|string
     */
    public function getName();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;
}
