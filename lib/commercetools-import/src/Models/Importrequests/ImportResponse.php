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
     * <p>The identifiers and status of the <a href="ctp:import:type:ImportOperation">ImportOperations</a> created by the ImportRequest.</p>
     *

     * @return null|ImportOperationStatusCollection
     */
    public function getOperationStatus();

    /**
     * @param ?ImportOperationStatusCollection $operationStatus
     */
    public function setOperationStatus(?ImportOperationStatusCollection $operationStatus): void;
}
