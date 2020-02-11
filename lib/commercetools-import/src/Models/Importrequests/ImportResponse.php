<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Import\Models\Importoperations\ImportOperationStatusCollection;

interface ImportResponse extends JsonObject
{

    public const FIELD_OPERATION_STATUS = 'operationStatus';

    /**
     * @return null|ImportOperationStatusCollection
     */
    public function getOperationStatus();

    public function setOperationStatus(?ImportOperationStatusCollection $operationStatus): void;
}
