<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Orders\OrderImportCollection;

interface OrderImportRequest extends ImportRequest
{
    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The order import resources of this request.</p>
     *
     * @return null|OrderImportCollection
     */
    public function getResources();

    /**
     * @param ?OrderImportCollection $resources
     */
    public function setResources(?OrderImportCollection $resources): void;
}
