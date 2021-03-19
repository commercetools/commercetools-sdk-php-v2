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
 * @extends MapperSequence<SetNameChange>
 * @method SetNameChange current()
 * @method SetNameChange at($offset)
 */
class SetNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetNameChange $value
     * @psalm-param SetNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
