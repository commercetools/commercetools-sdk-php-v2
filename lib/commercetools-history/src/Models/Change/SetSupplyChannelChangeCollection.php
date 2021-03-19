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
 * @extends MapperSequence<SetSupplyChannelChange>
 * @method SetSupplyChannelChange current()
 * @method SetSupplyChannelChange at($offset)
 */
class SetSupplyChannelChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSupplyChannelChange $value
     * @psalm-param SetSupplyChannelChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSupplyChannelChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSupplyChannelChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSupplyChannelChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetSupplyChannelChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSupplyChannelChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
