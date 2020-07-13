<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsummaries;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OperationStates>
 */
final class OperationStatesBuilder implements Builder
{
    /**
     * @var ?float
     */
    private $Accepted;

    /**
     * @var ?float
     */
    private $ValidationFailed;

    /**
     * @var ?float
     */
    private $Unresolved;

    /**
     * @var ?float
     */
    private $Resolved;

    /**
     * @var ?float
     */
    private $WaitForMasterVariant;

    /**
     * @var ?float
     */
    private $Imported;

    /**
     * @var ?float
     */
    private $Deleted;

    /**
     * @var ?float
     */
    private $Rejected;

    /**
     * @var ?float
     */
    private $Skipped;

    /**
     * @var ?float
     */
    private $Expired;

    /**
     * <p>The number of import operations that are in the state <code>Accepted</code>.</p>
     *
     * @return null|float
     */
    public function getAccepted()
    {
        return $this->Accepted;
    }

    /**
     * <p>The number of import operations that are in the state <code>ValidationFailed</code>.</p>
     *
     * @return null|float
     */
    public function getValidationFailed()
    {
        return $this->ValidationFailed;
    }

    /**
     * <p>The number of import operations that are in the state <code>Unresolved</code>.</p>
     *
     * @return null|float
     */
    public function getUnresolved()
    {
        return $this->Unresolved;
    }

    /**
     * <p>The number of import operations that are in the state <code>Resolved</code>.</p>
     *
     * @return null|float
     */
    public function getResolved()
    {
        return $this->Resolved;
    }

    /**
     * <p>The number of import operations that are in the state <code>WaitForMasterVariant</code>.</p>
     *
     * @return null|float
     */
    public function getWaitForMasterVariant()
    {
        return $this->WaitForMasterVariant;
    }

    /**
     * <p>The number of import operations that are in the state <code>Imported</code>.</p>
     *
     * @return null|float
     */
    public function getImported()
    {
        return $this->Imported;
    }

    /**
     * <p>The number of import operations that are in the state <code>Deleted</code>.</p>
     *
     * @return null|float
     */
    public function getDeleted()
    {
        return $this->Deleted;
    }

    /**
     * <p>The number of import operations that are in the state <code>Rejected</code>.</p>
     *
     * @return null|float
     */
    public function getRejected()
    {
        return $this->Rejected;
    }

    /**
     * <p>The number of import operations that are in the state <code>Skipped</code>.</p>
     *
     * @return null|float
     */
    public function getSkipped()
    {
        return $this->Skipped;
    }

    /**
     * <p>The number of import operations that are in the state <code>Expired</code>.</p>
     *
     * @return null|float
     */
    public function getExpired()
    {
        return $this->Expired;
    }

    /**
     * @param ?float $Accepted
     * @return $this
     */
    public function withAccepted(?float $Accepted)
    {
        $this->Accepted = $Accepted;

        return $this;
    }

    /**
     * @param ?float $ValidationFailed
     * @return $this
     */
    public function withValidationFailed(?float $ValidationFailed)
    {
        $this->ValidationFailed = $ValidationFailed;

        return $this;
    }

    /**
     * @param ?float $Unresolved
     * @return $this
     */
    public function withUnresolved(?float $Unresolved)
    {
        $this->Unresolved = $Unresolved;

        return $this;
    }

    /**
     * @param ?float $Resolved
     * @return $this
     */
    public function withResolved(?float $Resolved)
    {
        $this->Resolved = $Resolved;

        return $this;
    }

    /**
     * @param ?float $WaitForMasterVariant
     * @return $this
     */
    public function withWaitForMasterVariant(?float $WaitForMasterVariant)
    {
        $this->WaitForMasterVariant = $WaitForMasterVariant;

        return $this;
    }

    /**
     * @param ?float $Imported
     * @return $this
     */
    public function withImported(?float $Imported)
    {
        $this->Imported = $Imported;

        return $this;
    }

    /**
     * @param ?float $Deleted
     * @return $this
     */
    public function withDeleted(?float $Deleted)
    {
        $this->Deleted = $Deleted;

        return $this;
    }

    /**
     * @param ?float $Rejected
     * @return $this
     */
    public function withRejected(?float $Rejected)
    {
        $this->Rejected = $Rejected;

        return $this;
    }

    /**
     * @param ?float $Skipped
     * @return $this
     */
    public function withSkipped(?float $Skipped)
    {
        $this->Skipped = $Skipped;

        return $this;
    }

    /**
     * @param ?float $Expired
     * @return $this
     */
    public function withExpired(?float $Expired)
    {
        $this->Expired = $Expired;

        return $this;
    }


    public function build(): OperationStates
    {
        return new OperationStatesModel(
            $this->Accepted,
            $this->ValidationFailed,
            $this->Unresolved,
            $this->Resolved,
            $this->WaitForMasterVariant,
            $this->Imported,
            $this->Deleted,
            $this->Rejected,
            $this->Skipped,
            $this->Expired
        );
    }

    public static function of(): OperationStatesBuilder
    {
        return new self();
    }
}
