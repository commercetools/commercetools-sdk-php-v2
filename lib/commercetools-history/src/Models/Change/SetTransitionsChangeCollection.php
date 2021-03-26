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
 * @extends MapperSequence<SetTransitionsChange>
 * @method SetTransitionsChange current()
 * @method SetTransitionsChange at($offset)
 */
class SetTransitionsChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTransitionsChange $value
     * @psalm-param SetTransitionsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTransitionsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTransitionsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTransitionsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetTransitionsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTransitionsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
