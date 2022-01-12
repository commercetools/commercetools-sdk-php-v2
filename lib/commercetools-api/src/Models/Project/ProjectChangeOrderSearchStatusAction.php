<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeOrderSearchStatusAction extends ProjectUpdateAction
{
    public const FIELD_STATUS = 'status';

    /**
     * <p>Activated indicates that the Order Search feature is active. Deactivated means that the namely feature is currently configured to be inactive.</p>
     *
     * @return null|string
     */
    public function getStatus();

    /**
     * @param ?string $status
     */
    public function setStatus(?string $status): void;
}
