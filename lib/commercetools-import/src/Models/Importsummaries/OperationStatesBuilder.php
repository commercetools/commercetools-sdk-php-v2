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
    private $processing;

    /**

     * @var ?int
     */
    private $validationFailed;

    /**

     * @var ?int
     */
    private $unresolved;

    /**

     * @var ?int
     */
    private $waitForMasterVariant;

    /**

     * @var ?int
     */
    private $imported;

    /**

     * @var ?int
     */
    private $rejected;

    /**

     * @var ?int
     */
    private $canceled;

    /**
     * <p>The number of resources in the <code>processing</code> state.</p>
     *

     * @return null|int
     */
    public function getProcessing()
    {
        return $this->processing;
    }

    /**
     * <p>The number of resources in the <code>validationFailed</code> state.</p>
     *

     * @return null|int
     */
    public function getValidationFailed()
    {
        return $this->validationFailed;
    }

    /**
     * <p>The number of resources in the <code>unresolved</code> state.</p>
     *

     * @return null|int
     */
    public function getUnresolved()
    {
        return $this->unresolved;
    }

    /**
     * <p>The number of resources in the <code>waitForMasterVariant</code> state.</p>
     *

     * @return null|int
     */
    public function getWaitForMasterVariant()
    {
        return $this->waitForMasterVariant;
    }

    /**
     * <p>The number of resources in the <code>imported</code> state.</p>
     *

     * @return null|int
     */
    public function getImported()
    {
        return $this->imported;
    }

    /**
     * <p>The number of resources in the <code>rejected</code> state.</p>
     *

     * @return null|int
     */
    public function getRejected()
    {
        return $this->rejected;
    }

    /**
     * <p>The number of resources in the <code>canceled</code> state.</p>
     *

     * @return null|int
     */
    public function getCanceled()
    {
        return $this->canceled;
    }

    /**
     * @param ?int $processing
     * @return $this
     */
    public function withProcessing(?int $processing)
    {
        $this->processing = $processing;

        return $this;
    }

    /**
     * @param ?int $validationFailed
     * @return $this
     */
    public function withValidationFailed(?int $validationFailed)
    {
        $this->validationFailed = $validationFailed;

        return $this;
    }

    /**
     * @param ?int $unresolved
     * @return $this
     */
    public function withUnresolved(?int $unresolved)
    {
        $this->unresolved = $unresolved;

        return $this;
    }

    /**
     * @param ?int $waitForMasterVariant
     * @return $this
     */
    public function withWaitForMasterVariant(?int $waitForMasterVariant)
    {
        $this->waitForMasterVariant = $waitForMasterVariant;

        return $this;
    }

    /**
     * @param ?int $imported
     * @return $this
     */
    public function withImported(?int $imported)
    {
        $this->imported = $imported;

        return $this;
    }

    /**
     * @param ?int $rejected
     * @return $this
     */
    public function withRejected(?int $rejected)
    {
        $this->rejected = $rejected;

        return $this;
    }

    /**
     * @param ?int $canceled
     * @return $this
     */
    public function withCanceled(?int $canceled)
    {
        $this->canceled = $canceled;

        return $this;
    }


    public function build(): OperationStates
    {
        return new OperationStatesModel(
            $this->processing,
            $this->validationFailed,
            $this->unresolved,
            $this->waitForMasterVariant,
            $this->imported,
            $this->rejected,
            $this->canceled
        );
    }

    public static function of(): OperationStatesBuilder
    {
        return new self();
    }
}
