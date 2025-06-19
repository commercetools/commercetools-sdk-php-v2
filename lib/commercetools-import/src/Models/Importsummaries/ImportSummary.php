<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsummaries;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ImportSummary extends JsonObject
{
    public const FIELD_STATES = 'states';
    public const FIELD_TOTAL = 'total';

    /**
     * <p>The import status of an <a href="ctp:import:type:ImportContainer">ImportContainer</a> given by the number of resources in each <a href="ctp:import:type:ProcessingState">ProcessingState</a>.</p>
     *

     * @return null|OperationStates
     */
    public function getStates();

    /**
     * <p>The total number of <a href="ctp:import:type:ImportOperation">ImportOperations</a> received for this Import Summary.</p>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * @param ?OperationStates $states
     */
    public function setStates(?OperationStates $states): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;
}
