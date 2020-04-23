<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsummaries;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OperationStatesModel extends JsonObjectModel implements OperationStates
{
    /**
     * @var ?float
     */
    protected $Accepted;

    /**
     * @var ?float
     */
    protected $ValidationFailed;

    /**
     * @var ?float
     */
    protected $Unresolved;

    /**
     * @var ?float
     */
    protected $Resolved;

    /**
     * @var ?float
     */
    protected $WaitForMasterVariant;

    /**
     * @var ?float
     */
    protected $Imported;

    /**
     * @var ?float
     */
    protected $Deleted;

    /**
     * @var ?float
     */
    protected $Rejected;

    /**
     * @var ?float
     */
    protected $Skipped;

    /**
     * @var ?float
     */
    protected $Expired;


    public function __construct(
        float $Accepted = null,
        float $ValidationFailed = null,
        float $Unresolved = null,
        float $Resolved = null,
        float $WaitForMasterVariant = null,
        float $Imported = null,
        float $Deleted = null,
        float $Rejected = null,
        float $Skipped = null,
        float $Expired = null
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
     * @return null|float
     */
    public function getAccepted()
    {
        if (is_null($this->Accepted)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_ACCEPTED);
            if (is_null($data)) {
                return null;
            }
            $this->Accepted = (float) $data;
        }

        return $this->Accepted;
    }

    /**
     * <p>The number of import operations that are in the state <code>ValidationFailed</code>.</p>
     *
     * @return null|float
     */
    public function getValidationFailed()
    {
        if (is_null($this->ValidationFailed)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_VALIDATION_FAILED);
            if (is_null($data)) {
                return null;
            }
            $this->ValidationFailed = (float) $data;
        }

        return $this->ValidationFailed;
    }

    /**
     * <p>The number of import operations that are in the state <code>Unresolved</code>.</p>
     *
     * @return null|float
     */
    public function getUnresolved()
    {
        if (is_null($this->Unresolved)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_UNRESOLVED);
            if (is_null($data)) {
                return null;
            }
            $this->Unresolved = (float) $data;
        }

        return $this->Unresolved;
    }

    /**
     * <p>The number of import operations that are in the state <code>Resolved</code>.</p>
     *
     * @return null|float
     */
    public function getResolved()
    {
        if (is_null($this->Resolved)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_RESOLVED);
            if (is_null($data)) {
                return null;
            }
            $this->Resolved = (float) $data;
        }

        return $this->Resolved;
    }

    /**
     * <p>The number of import operations that are in the state <code>WaitForMasterVariant</code>.</p>
     *
     * @return null|float
     */
    public function getWaitForMasterVariant()
    {
        if (is_null($this->WaitForMasterVariant)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_WAIT_FOR_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->WaitForMasterVariant = (float) $data;
        }

        return $this->WaitForMasterVariant;
    }

    /**
     * <p>The number of import operations that are in the state <code>Imported</code>.</p>
     *
     * @return null|float
     */
    public function getImported()
    {
        if (is_null($this->Imported)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_IMPORTED);
            if (is_null($data)) {
                return null;
            }
            $this->Imported = (float) $data;
        }

        return $this->Imported;
    }

    /**
     * <p>The number of import operations that are in the state <code>Deleted</code>.</p>
     *
     * @return null|float
     */
    public function getDeleted()
    {
        if (is_null($this->Deleted)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_DELETED);
            if (is_null($data)) {
                return null;
            }
            $this->Deleted = (float) $data;
        }

        return $this->Deleted;
    }

    /**
     * <p>The number of import operations that are in the state <code>Rejected</code>.</p>
     *
     * @return null|float
     */
    public function getRejected()
    {
        if (is_null($this->Rejected)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_REJECTED);
            if (is_null($data)) {
                return null;
            }
            $this->Rejected = (float) $data;
        }

        return $this->Rejected;
    }

    /**
     * <p>The number of import operations that are in the state <code>Skipped</code>.</p>
     *
     * @return null|float
     */
    public function getSkipped()
    {
        if (is_null($this->Skipped)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_SKIPPED);
            if (is_null($data)) {
                return null;
            }
            $this->Skipped = (float) $data;
        }

        return $this->Skipped;
    }

    /**
     * <p>The number of import operations that are in the state <code>Expired</code>.</p>
     *
     * @return null|float
     */
    public function getExpired()
    {
        if (is_null($this->Expired)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_EXPIRED);
            if (is_null($data)) {
                return null;
            }
            $this->Expired = (float) $data;
        }

        return $this->Expired;
    }


    public function setAccepted(?float $Accepted): void
    {
        $this->Accepted = $Accepted;
    }

    public function setValidationFailed(?float $ValidationFailed): void
    {
        $this->ValidationFailed = $ValidationFailed;
    }

    public function setUnresolved(?float $Unresolved): void
    {
        $this->Unresolved = $Unresolved;
    }

    public function setResolved(?float $Resolved): void
    {
        $this->Resolved = $Resolved;
    }

    public function setWaitForMasterVariant(?float $WaitForMasterVariant): void
    {
        $this->WaitForMasterVariant = $WaitForMasterVariant;
    }

    public function setImported(?float $Imported): void
    {
        $this->Imported = $Imported;
    }

    public function setDeleted(?float $Deleted): void
    {
        $this->Deleted = $Deleted;
    }

    public function setRejected(?float $Rejected): void
    {
        $this->Rejected = $Rejected;
    }

    public function setSkipped(?float $Skipped): void
    {
        $this->Skipped = $Skipped;
    }

    public function setExpired(?float $Expired): void
    {
        $this->Expired = $Expired;
    }
}
