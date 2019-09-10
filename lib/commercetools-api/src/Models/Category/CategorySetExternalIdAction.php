<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

interface CategorySetExternalIdAction extends CategoryUpdateAction
{
    const FIELD_EXTERNAL_ID = 'externalId';

    /**
     * @return null|string
     */
    public function getExternalId();

    public function setExternalId(?string $externalId): void;
}
