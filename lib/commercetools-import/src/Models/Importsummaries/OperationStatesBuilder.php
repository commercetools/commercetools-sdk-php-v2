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
     * @var ?int
     */
    private $ValidationFailed;

    /**
     * @var ?int
     */
    private $Unresolved;

    /**
     * @var ?int
     */
    private $WaitForMasterVariant;

    /**
     * @var ?int
     */
    private $Imported;

    /**
     * @var ?int
     */
    private $Rejected;

    /**
     * <p>The number of resources in the <code>ValidationFailed</code> state.</p>
     *
     * @return null|int
     */
    public function getValidationFailed()
    {
        return $this->ValidationFailed;
    }

    /**
     * <p>The number of resources in the <code>Unresolved</code> state.</p>
     *
     * @return null|int
     */
    public function getUnresolved()
    {
        return $this->Unresolved;
    }

    /**
     * <p>The number of resources in the <code>WaitForMasterVariant</code> state.</p>
     *
     * @return null|int
     */
    public function getWaitForMasterVariant()
    {
        return $this->WaitForMasterVariant;
    }

    /**
     * <p>The number of resources in the <code>Imported</code> state.</p>
     *
     * @return null|int
     */
    public function getImported()
    {
        return $this->Imported;
    }

    /**
     * <p>The number of resources in the <code>Rejected</code> state.</p>
     *
     * @return null|int
     */
    public function getRejected()
    {
        return $this->Rejected;
    }

    /**
     * @param ?int $ValidationFailed
     * @return $this
     */
    public function withValidationFailed(?int $ValidationFailed)
    {
        $this->ValidationFailed = $ValidationFailed;

        return $this;
    }

    /**
     * @param ?int $Unresolved
     * @return $this
     */
    public function withUnresolved(?int $Unresolved)
    {
        $this->Unresolved = $Unresolved;

        return $this;
    }

    /**
     * @param ?int $WaitForMasterVariant
     * @return $this
     */
    public function withWaitForMasterVariant(?int $WaitForMasterVariant)
    {
        $this->WaitForMasterVariant = $WaitForMasterVariant;

        return $this;
    }

    /**
     * @param ?int $Imported
     * @return $this
     */
    public function withImported(?int $Imported)
    {
        $this->Imported = $Imported;

        return $this;
    }

    /**
     * @param ?int $Rejected
     * @return $this
     */
    public function withRejected(?int $Rejected)
    {
        $this->Rejected = $Rejected;

        return $this;
    }


    public function build(): OperationStates
    {
        return new OperationStatesModel(
            $this->ValidationFailed,
            $this->Unresolved,
            $this->WaitForMasterVariant,
            $this->Imported,
            $this->Rejected
        );
    }

    public static function of(): OperationStatesBuilder
    {
        return new self();
    }
}
