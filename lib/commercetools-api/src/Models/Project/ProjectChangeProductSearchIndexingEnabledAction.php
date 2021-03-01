<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeProductSearchIndexingEnabledAction extends ProjectUpdateAction
{
    public const FIELD_ENABLED = 'enabled';

    /**
     * @return null|bool
     */
    public function getEnabled();

    /**
     * @param ?bool $enabled
     */
    public function setEnabled(?bool $enabled): void;
}
