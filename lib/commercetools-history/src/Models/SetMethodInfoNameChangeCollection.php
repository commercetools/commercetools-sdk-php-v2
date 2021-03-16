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
 * @extends MapperSequence<SetMethodInfoNameChange>
 * @method SetMethodInfoNameChange current()
 * @method SetMethodInfoNameChange at($offset)
 */
class SetMethodInfoNameChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMethodInfoNameChange $value
     * @psalm-param SetMethodInfoNameChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoNameChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoNameChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoNameChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetMethodInfoNameChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMethodInfoNameChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
