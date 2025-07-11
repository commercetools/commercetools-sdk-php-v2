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
final class ImportSummaryModel extends JsonObjectModel implements ImportSummary
{
    /**
     *
     * @var ?OperationStates
     */
    protected $states;

    /**
     *
     * @var ?int
     */
    protected $total;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OperationStates $states = null,
        ?int $total = null
    ) {
        $this->states = $states;
        $this->total = $total;
    }

    /**
     * <p>The current <a href="ctp:import:type:ProcessingState">ProcessingStates</a> of ImportOperations in an ImportContainer.</p>
     *
     *
     * @return null|OperationStates
     */
    public function getStates()
    {
        if (is_null($this->states)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATES);
            if (is_null($data)) {
                return null;
            }

            $this->states = OperationStatesModel::of($data);
        }

        return $this->states;
    }

    /**
     * <p>The total number of ImportOperations in <code>states</code>.</p>
     *
     *
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }


    /**
     * @param ?OperationStates $states
     */
    public function setStates(?OperationStates $states): void
    {
        $this->states = $states;
    }

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }
}
