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
 * @implements Builder<ImportSummary>
 */
final class ImportSummaryBuilder implements Builder
{
    /**

     * @var null|OperationStates|OperationStatesBuilder
     */
    private $states;

    /**

     * @var ?int
     */
    private $total;

    /**
     * <p>The current <a href="ctp:import:type:ProcessingState">ProcessingStates</a> of ImportOperations in an ImportContainer.</p>
     *

     * @return null|OperationStates
     */
    public function getStates()
    {
        return $this->states instanceof OperationStatesBuilder ? $this->states->build() : $this->states;
    }

    /**
     * <p>The total number of ImportOperations in <code>states</code>.</p>
     *

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param ?OperationStates $states
     * @return $this
     */
    public function withStates(?OperationStates $states)
    {
        $this->states = $states;

        return $this;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @deprecated use withStates() instead
     * @return $this
     */
    public function withStatesBuilder(?OperationStatesBuilder $states)
    {
        $this->states = $states;

        return $this;
    }

    public function build(): ImportSummary
    {
        return new ImportSummaryModel(
            $this->states instanceof OperationStatesBuilder ? $this->states->build() : $this->states,
            $this->total
        );
    }

    public static function of(): ImportSummaryBuilder
    {
        return new self();
    }
}
