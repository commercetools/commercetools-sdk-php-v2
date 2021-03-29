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
 * @extends MapperSequence<ChangeTargetChange>
 * @method ChangeTargetChange current()
 * @method ChangeTargetChange at($offset)
 */
class ChangeTargetChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetChange $value
     * @psalm-param ChangeTargetChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
