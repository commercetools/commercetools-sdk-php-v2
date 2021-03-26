<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AddTaxRateChange>
 * @method AddTaxRateChange current()
 * @method AddTaxRateChange at($offset)
 */
class AddTaxRateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddTaxRateChange $value
     * @psalm-param AddTaxRateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddTaxRateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddTaxRateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddTaxRateChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddTaxRateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddTaxRateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
