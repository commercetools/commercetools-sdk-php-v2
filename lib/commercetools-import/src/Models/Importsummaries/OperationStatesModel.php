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
    protected $WaitForMasterVariant;

    /**
     * @var ?int
     */
    protected $Imported;

    /**
     * @var ?int
     */
    protected $Rejected;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $ValidationFailed = null,
        ?int $Unresolved = null,
        ?int $WaitForMasterVariant = null,
        ?int $Imported = null,
        ?int $Rejected = null
    ) {
        $this->ValidationFailed = $ValidationFailed;
        $this->Unresolved = $Unresolved;
        $this->WaitForMasterVariant = $WaitForMasterVariant;
        $this->Imported = $Imported;
        $this->Rejected = $Rejected;
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
            $data = $this->raw(self::FIELD_VALIDATION_FAILED);
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
            $data = $this->raw(self::FIELD_UNRESOLVED);
            if (is_null($data)) {
                return null;
            }
            $this->Unresolved = (int) $data;
        }

        return $this->Unresolved;
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
            $data = $this->raw(self::FIELD_WAIT_FOR_MASTER_VARIANT);
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
            $data = $this->raw(self::FIELD_IMPORTED);
            if (is_null($data)) {
                return null;
            }
            $this->Imported = (int) $data;
        }

        return $this->Imported;
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
            $data = $this->raw(self::FIELD_REJECTED);
            if (is_null($data)) {
                return null;
            }
            $this->Rejected = (int) $data;
        }

        return $this->Rejected;
    }


    /**
     * @param ?int $ValidationFailed
     */
    public function setValidationFailed(?int $ValidationFailed): void
    {
        $this->ValidationFailed = $ValidationFailed;
    }

    /**
     * @param ?int $Unresolved
     */
    public function setUnresolved(?int $Unresolved): void
    {
        $this->Unresolved = $Unresolved;
    }

    /**
     * @param ?int $WaitForMasterVariant
     */
    public function setWaitForMasterVariant(?int $WaitForMasterVariant): void
    {
        $this->WaitForMasterVariant = $WaitForMasterVariant;
    }

    /**
     * @param ?int $Imported
     */
    public function setImported(?int $Imported): void
    {
        $this->Imported = $Imported;
    }

    /**
     * @param ?int $Rejected
     */
    public function setRejected(?int $Rejected): void
    {
        $this->Rejected = $Rejected;
    }
}
