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
 * @extends MapperSequence<SetDistributionChannelsChange>
 * @method SetDistributionChannelsChange current()
 * @method SetDistributionChannelsChange at($offset)
 */
class SetDistributionChannelsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDistributionChannelsChange $value
     * @psalm-param SetDistributionChannelsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDistributionChannelsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDistributionChannelsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDistributionChannelsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetDistributionChannelsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDistributionChannelsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
