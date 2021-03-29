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
 * @extends MapperSequence<ChangePriceChange>
 * @method ChangePriceChange current()
 * @method ChangePriceChange at($offset)
 */
class ChangePriceChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangePriceChange $value
     * @psalm-param ChangePriceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePriceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePriceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePriceChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePriceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangePriceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
