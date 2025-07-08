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
     * <p>The current <a href="ctp:import:type:ProcessingState">ProcessingStates</a> of ImportOperations in an ImportContainer.</p>
     *

     * @return null|OperationStates
     */
    public function getStates();

    /**
     * <p>The total number of ImportOperations in <code>states</code>.</p>
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
