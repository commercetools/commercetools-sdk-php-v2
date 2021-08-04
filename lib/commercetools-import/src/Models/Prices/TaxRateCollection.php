<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TaxRate>
 * @method TaxRate current()
 * @method TaxRate at($offset)
 */
class TaxRateCollection extends MapperSequence
{
    /**
     * @psalm-assert TaxRate $value
     * @psalm-param TaxRate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TaxRateCollection
     */
    public function add($value)
    {
        if (!$value instanceof TaxRate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TaxRate
     */
    protected function mapper()
    {
        return function (?int $index): ?TaxRate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TaxRate $data */
                $data = TaxRateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
