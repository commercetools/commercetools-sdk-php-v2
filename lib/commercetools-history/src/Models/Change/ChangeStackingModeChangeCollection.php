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
 * @extends MapperSequence<ChangeStackingModeChange>
 * @method ChangeStackingModeChange current()
 * @method ChangeStackingModeChange at($offset)
 */
class ChangeStackingModeChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeStackingModeChange $value
     * @psalm-param ChangeStackingModeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeStackingModeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeStackingModeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeStackingModeChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeStackingModeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeStackingModeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
