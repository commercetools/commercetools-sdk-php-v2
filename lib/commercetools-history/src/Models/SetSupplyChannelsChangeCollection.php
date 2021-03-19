<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetSupplyChannelsChange>
 * @method SetSupplyChannelsChange current()
 * @method SetSupplyChannelsChange at($offset)
 */
class SetSupplyChannelsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSupplyChannelsChange $value
     * @psalm-param SetSupplyChannelsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSupplyChannelsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSupplyChannelsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSupplyChannelsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetSupplyChannelsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSupplyChannelsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
