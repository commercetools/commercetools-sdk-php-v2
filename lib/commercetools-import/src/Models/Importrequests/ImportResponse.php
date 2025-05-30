<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Importoperations\ImportOperationStatusCollection;

interface ImportResponse extends JsonObject
{
    public const FIELD_OPERATION_STATUS = 'operationStatus';

    /**
     * <p>A list of the ID's and validation statuses of new <a href="#importoperation">ImportOperations</a>.</p>
     *

     * @return null|ImportOperationStatusCollection
     */
    public function getOperationStatus();

    /**
     * @param ?ImportOperationStatusCollection $operationStatus
     */
    public function setOperationStatus(?ImportOperationStatusCollection $operationStatus): void;
}
