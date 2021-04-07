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
    public const FIELD_VALIDATION_FAILED = 'ValidationFailed';
    public const FIELD_UNRESOLVED = 'Unresolved';
    public const FIELD_WAIT_FOR_MASTER_VARIANT = 'WaitForMasterVariant';
    public const FIELD_IMPORTED = 'Imported';
    public const FIELD_REJECTED = 'Rejected';

    /**
     * <p>The number of import operations that are in the state <code>ValidationFailed</code>.</p>
     *
     * @return null|int
     */
    public function getValidationFailed();

    /**
     * <p>The number of import operations that are in the state <code>Unresolved</code>.</p>
     *
     * @return null|int
     */
    public function getUnresolved();

    /**
     * <p>The number of import operations that are in the state <code>WaitForMasterVariant</code>.</p>
     *
     * @return null|int
     */
    public function getWaitForMasterVariant();

    /**
     * <p>The number of import operations that are in the state <code>Imported</code>.</p>
     *
     * @return null|int
     */
    public function getImported();

    /**
     * <p>The number of import operations that are in the state <code>Rejected</code>.</p>
     *
     * @return null|int
     */
    public function getRejected();

    /**
     * @param ?int $ValidationFailed
     */
    public function setValidationFailed(?int $ValidationFailed): void;

    /**
     * @param ?int $Unresolved
     */
    public function setUnresolved(?int $Unresolved): void;

    /**
     * @param ?int $WaitForMasterVariant
     */
    public function setWaitForMasterVariant(?int $WaitForMasterVariant): void;

    /**
     * @param ?int $Imported
     */
    public function setImported(?int $Imported): void;

    /**
     * @param ?int $Rejected
     */
    public function setRejected(?int $Rejected): void;
}
