<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsummaries;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OperationStates extends JsonObject
{
    public const FIELD_PROCESSING = 'processing';
    public const FIELD_VALIDATION_FAILED = 'validationFailed';
    public const FIELD_UNRESOLVED = 'unresolved';
    public const FIELD_WAIT_FOR_MASTER_VARIANT = 'waitForMasterVariant';
    public const FIELD_IMPORTED = 'imported';
    public const FIELD_REJECTED = 'rejected';
    public const FIELD_CANCELED = 'canceled';

    /**
     * <p>The number of resources in the <code>processing</code> state.</p>
     *

     * @return null|int
     */
    public function getProcessing();

    /**
     * <p>The number of resources in the <code>validationFailed</code> state.</p>
     *

     * @return null|int
     */
    public function getValidationFailed();

    /**
     * <p>The number of resources in the <code>unresolved</code> state.</p>
     *

     * @return null|int
     */
    public function getUnresolved();

    /**
     * <p>The number of resources in the <code>waitForMasterVariant</code> state.</p>
     *

     * @return null|int
     */
    public function getWaitForMasterVariant();

    /**
     * <p>The number of resources in the <code>imported</code> state.</p>
     *

     * @return null|int
     */
    public function getImported();

    /**
     * <p>The number of resources in the <code>rejected</code> state.</p>
     *

     * @return null|int
     */
    public function getRejected();

    /**
     * <p>The number of resources in the <code>canceled</code> state.</p>
     *

     * @return null|int
     */
    public function getCanceled();

    /**
     * @param ?int $processing
     */
    public function setProcessing(?int $processing): void;

    /**
     * @param ?int $validationFailed
     */
    public function setValidationFailed(?int $validationFailed): void;

    /**
     * @param ?int $unresolved
     */
    public function setUnresolved(?int $unresolved): void;

    /**
     * @param ?int $waitForMasterVariant
     */
    public function setWaitForMasterVariant(?int $waitForMasterVariant): void;

    /**
     * @param ?int $imported
     */
    public function setImported(?int $imported): void;

    /**
     * @param ?int $rejected
     */
    public function setRejected(?int $rejected): void;

    /**
     * @param ?int $canceled
     */
    public function setCanceled(?int $canceled): void;
}
