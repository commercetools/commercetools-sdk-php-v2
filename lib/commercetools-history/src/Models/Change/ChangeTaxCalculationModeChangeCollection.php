<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeTaxCalculationModeChange>
 * @method ChangeTaxCalculationModeChange current()
 * @method ChangeTaxCalculationModeChange end()
 * @method ChangeTaxCalculationModeChange at($offset)
 */
class ChangeTaxCalculationModeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeTaxCalculationModeChange $value
     * @psalm-param ChangeTaxCalculationModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTaxCalculationModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTaxCalculationModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTaxCalculationModeChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangeTaxCalculationModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeTaxCalculationModeChange $data */
                $data = ChangeTaxCalculationModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
