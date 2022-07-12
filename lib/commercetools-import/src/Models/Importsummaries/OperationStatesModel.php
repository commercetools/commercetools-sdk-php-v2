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
    protected $processing;

    /**

     * @var ?int
     */
    protected $validationFailed;

    /**

     * @var ?int
     */
    protected $unresolved;

    /**

     * @var ?int
     */
    protected $waitForMasterVariant;

    /**

     * @var ?int
     */
    protected $imported;

    /**

     * @var ?int
     */
    protected $rejected;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $processing = null,
        ?int $validationFailed = null,
        ?int $unresolved = null,
        ?int $waitForMasterVariant = null,
        ?int $imported = null,
        ?int $rejected = null
    ) {
        $this->processing = $processing;
        $this->validationFailed = $validationFailed;
        $this->unresolved = $unresolved;
        $this->waitForMasterVariant = $waitForMasterVariant;
        $this->imported = $imported;
        $this->rejected = $rejected;
    }

    /**
     * <p>The number of resources in the <code>processing</code> state.</p>
     *

     * @return null|int
     */
    public function getProcessing()
    {
        if (is_null($this->processing)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_PROCESSING);
            if (is_null($data)) {
                return null;
            }
            $this->processing = (int) $data;
        }

        return $this->processing;
    }

    /**
     * <p>The number of resources in the <code>validationFailed</code> state.</p>
     *

     * @return null|int
     */
    public function getValidationFailed()
    {
        if (is_null($this->validationFailed)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VALIDATION_FAILED);
            if (is_null($data)) {
                return null;
            }
            $this->validationFailed = (int) $data;
        }

        return $this->validationFailed;
    }

    /**
     * <p>The number of resources in the <code>unresolved</code> state.</p>
     *

     * @return null|int
     */
    public function getUnresolved()
    {
        if (is_null($this->unresolved)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_UNRESOLVED);
            if (is_null($data)) {
                return null;
            }
            $this->unresolved = (int) $data;
        }

        return $this->unresolved;
    }

    /**
     * <p>The number of resources in the <code>waitForMasterVariant</code> state.</p>
     *

     * @return null|int
     */
    public function getWaitForMasterVariant()
    {
        if (is_null($this->waitForMasterVariant)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_WAIT_FOR_MASTER_VARIANT);
            if (is_null($data)) {
                return null;
            }
            $this->waitForMasterVariant = (int) $data;
        }

        return $this->waitForMasterVariant;
    }

    /**
     * <p>The number of resources in the <code>imported</code> state.</p>
     *

     * @return null|int
     */
    public function getImported()
    {
        if (is_null($this->imported)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_IMPORTED);
            if (is_null($data)) {
                return null;
            }
            $this->imported = (int) $data;
        }

        return $this->imported;
    }

    /**
     * <p>The number of resources in the <code>rejected</code> state.</p>
     *

     * @return null|int
     */
    public function getRejected()
    {
        if (is_null($this->rejected)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_REJECTED);
            if (is_null($data)) {
                return null;
            }
            $this->rejected = (int) $data;
        }

        return $this->rejected;
    }


    /**
     * @param ?int $processing
     */
    public function setProcessing(?int $processing): void
    {
        $this->processing = $processing;
    }

    /**
     * @param ?int $validationFailed
     */
    public function setValidationFailed(?int $validationFailed): void
    {
        $this->validationFailed = $validationFailed;
    }

    /**
     * @param ?int $unresolved
     */
    public function setUnresolved(?int $unresolved): void
    {
        $this->unresolved = $unresolved;
    }

    /**
     * @param ?int $waitForMasterVariant
     */
    public function setWaitForMasterVariant(?int $waitForMasterVariant): void
    {
        $this->waitForMasterVariant = $waitForMasterVariant;
    }

    /**
     * @param ?int $imported
     */
    public function setImported(?int $imported): void
    {
        $this->imported = $imported;
    }

    /**
     * @param ?int $rejected
     */
    public function setRejected(?int $rejected): void
    {
        $this->rejected = $rejected;
    }
}
