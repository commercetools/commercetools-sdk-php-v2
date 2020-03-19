<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingPrices>
 * @method MissingPrices current()
 * @method MissingPrices at($offset)
 */
class MissingPricesCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingPrices $value
     * @psalm-param MissingPrices|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingPricesCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingPrices) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingPrices
     */
    protected function mapper()
    {
        return function (int $index): ?MissingPrices {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingPricesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
