<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsummaries;

use Commercetools\Base\JsonObjectModel;

final class OperationStatesModel extends JsonObjectModel implements OperationStates
{
    /**
     * @var ?int
     */
    protected $Accepted;

    /**
     * @var ?int
     */
    protected $ValidationFailed;

    /**
     * @var ?int
     */
    protected $Unresolved;

    /**
     * @var ?int
     */
    protected $Resolved;

    /**
     * @var ?int
     */
    protected $WaitForMasterVariant;

    /**
     * @var ?int
     */
    protected $Imported;

    /**
     * @var ?int
     */
    protected $Deleted;

    /**
     * @var ?int
     */
    protected $Rejected;

    /**
     * @var ?int
     */
    protected $Skipped;

    /**
     * @var ?int
     */
    protected $Expired;

    public function __construct(
        int $Accepted = null,
        int $ValidationFailed = null,
        int $Unresolved = null,
        int $Resolved = null,
        int $WaitForMasterVariant = null,
        int $Imported = null,
        int $Deleted = null,
        int $Rejected = null,
        int $Skipped = null,
        int $Expired = null
    ) {
        $this->Accepted = $Accepted;
        $this->ValidationFailed = $ValidationFailed;
        $this->Unresolved = $Unresolved;
        $this->Resolved = $Resolved;
        $this->WaitForMasterVariant = $WaitForMasterVariant;
        $this->Imported = $Imported;
        $this->Deleted = $Deleted;
        $this->Rejected = $Rejected;
        $this->Skipped = $Skipped;
        $this->Expired = $Expired;
    }

    /**
     * <p>The number of import operations that are in the state <code>Accepted</code>.</p>
     *
     * @return null|int
     */
    public function getAccepted()
    {
        if (is_null($this->Accepted)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_ACCEPTED);
            if (is_null($data)) {
                return null;
            }
            $this->Accepted = (int) $data;
        }

        return $this->Accepted;
    }

    /**
     * <p>The number of import operations that are in the state <code>ValidationFailed</code>.</p>
     *
     * @return null|int
     */
    public function getValidationFailed()
    {
        if (is_null($this->ValidationFailed)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_VALIDATION_FAILED);
            if (is_null($data)) {
                return null;
            }
            $this->ValidationFailed = (int) $data;
        }

        return $this->ValidationFailed;
    }

    /**
     * <p>The number of import operations that are in the state <code>Unresolved</code>.</p>
     *
     * @return null|int
     */
    public function getUnresolved()
    {
        if (is_null($this->Unresolved)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_UNRESOLVED);
            if (is_null($data)) {
                return null;
            }
            $this->Unresolved = (int) $data;
        }

        return $this->Unresolved;
    }

    /**
     * <p>The number of import operations that are in the state <code>Resolved</code>.</p>
     *
     * @return null|int
     */
    public function getResolved()
    {
        if (is_null($this->Resolved)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_RESOLVED);
            if (is_null($data)) {
                return null;
            }
            $this->Resolved = (int) $data;
        }

        return $this->Resolved;
    }

    /**
     * <p>The number of import operations that are in the state <code>WaitForMasterVariant</code>.</p>
     *
     * @return null|int
     */
    public function getWaitForMasterVariant()
    {
        if (is_null($this->WaitForMasterVariant)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_WAIT_FOR_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->WaitForMasterVariant = (int) $data;
        }

        return $this->WaitForMasterVariant;
    }

    /**
     * <p>The number of import operations that are in the state <code>Imported</code>.</p>
     *
     * @return null|int
     */
    public function getImported()
    {
        if (is_null($this->Imported)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_IMPORTED);
            if (is_null($data)) {
                return null;
            }
            $this->Imported = (int) $data;
        }

        return $this->Imported;
    }

    /**
     * <p>The number of import operations that are in the state <code>Deleted</code>.</p>
     *
     * @return null|int
     */
    public function getDeleted()
    {
        if (is_null($this->Deleted)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_DELETED);
            if (is_null($data)) {
                return null;
            }
            $this->Deleted = (int) $data;
        }

        return $this->Deleted;
    }

    /**
     * <p>The number of import operations that are in the state <code>Rejected</code>.</p>
     *
     * @return null|int
     */
    public function getRejected()
    {
        if (is_null($this->Rejected)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_REJECTED);
            if (is_null($data)) {
                return null;
            }
            $this->Rejected = (int) $data;
        }

        return $this->Rejected;
    }

    /**
     * <p>The number of import operations that are in the state <code>Skipped</code>.</p>
     *
     * @return null|int
     */
    public function getSkipped()
    {
        if (is_null($this->Skipped)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_SKIPPED);
            if (is_null($data)) {
                return null;
            }
            $this->Skipped = (int) $data;
        }

        return $this->Skipped;
    }

    /**
     * <p>The number of import operations that are in the state <code>Expired</code>.</p>
     *
     * @return null|int
     */
    public function getExpired()
    {
        if (is_null($this->Expired)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(OperationStates::FIELD_EXPIRED);
            if (is_null($data)) {
                return null;
            }
            $this->Expired = (int) $data;
        }

        return $this->Expired;
    }

    public function setAccepted(?int $Accepted): void
    {
        $this->Accepted = $Accepted;
    }

    public function setValidationFailed(?int $ValidationFailed): void
    {
        $this->ValidationFailed = $ValidationFailed;
    }

    public function setUnresolved(?int $Unresolved): void
    {
        $this->Unresolved = $Unresolved;
    }

    public function setResolved(?int $Resolved): void
    {
        $this->Resolved = $Resolved;
    }

    public function setWaitForMasterVariant(?int $WaitForMasterVariant): void
    {
        $this->WaitForMasterVariant = $WaitForMasterVariant;
    }

    public function setImported(?int $Imported): void
    {
        $this->Imported = $Imported;
    }

    public function setDeleted(?int $Deleted): void
    {
        $this->Deleted = $Deleted;
    }

    public function setRejected(?int $Rejected): void
    {
        $this->Rejected = $Rejected;
    }

    public function setSkipped(?int $Skipped): void
    {
        $this->Skipped = $Skipped;
    }

    public function setExpired(?int $Expired): void
    {
        $this->Expired = $Expired;
    }
}
