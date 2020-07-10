<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\JsonObject;
use Shared\Base\DateTimeImmutableCollection;
use Models\Productdrafts\ProductDraftImportCollection;

interface ProductDraftImportRequest extends ImportRequest
{

    public const FIELD_RESOURCES = 'resources';

    /**
     * <p>The product draft import resources of this request.</p>
     *
     * @return null|ProductDraftImportCollection
     */
    public function getResources();

    public function setResources(?ProductDraftImportCollection $resources): void;
}
