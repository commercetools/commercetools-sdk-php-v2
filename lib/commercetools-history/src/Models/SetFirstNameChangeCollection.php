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
 * @extends MapperSequence<SetFirstNameChange>
 * @method SetFirstNameChange current()
 * @method SetFirstNameChange at($offset)
 */
class SetFirstNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetFirstNameChange $value
     * @psalm-param SetFirstNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetFirstNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetFirstNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetFirstNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetFirstNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetFirstNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
