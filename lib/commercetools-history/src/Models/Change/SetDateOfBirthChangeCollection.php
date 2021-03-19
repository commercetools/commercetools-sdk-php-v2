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
 * @extends MapperSequence<SetDateOfBirthChange>
 * @method SetDateOfBirthChange current()
 * @method SetDateOfBirthChange at($offset)
 */
class SetDateOfBirthChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDateOfBirthChange $value
     * @psalm-param SetDateOfBirthChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDateOfBirthChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDateOfBirthChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDateOfBirthChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetDateOfBirthChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDateOfBirthChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
