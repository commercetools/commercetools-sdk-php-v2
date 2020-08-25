<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Customers\CustomerImportCollection;

interface CustomerImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The customer import resources of this request.</p>
     *
     * @return null|CustomerImportCollection
     */
    public function getResources();

    /**
     * @param ?CustomerImportCollection $resources
     */
    public function setResources(?CustomerImportCollection $resources): void;
}
