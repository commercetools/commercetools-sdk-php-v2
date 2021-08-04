<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxPortion>
 * @method TaxPortion current()
 * @method TaxPortion at($offset)
 */
class TaxPortionCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxPortion $value
     * @psalm-param TaxPortion|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxPortionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxPortion) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxPortion
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxPortion {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxPortion $data */
                $data = TaxPortionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
