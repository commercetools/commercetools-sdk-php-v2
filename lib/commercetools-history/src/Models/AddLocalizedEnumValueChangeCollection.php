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
 * @extends MapperSequence<AddLocalizedEnumValueChange>
 * @method AddLocalizedEnumValueChange current()
 * @method AddLocalizedEnumValueChange at($offset)
 */
class AddLocalizedEnumValueChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddLocalizedEnumValueChange $value
     * @psalm-param AddLocalizedEnumValueChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddLocalizedEnumValueChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddLocalizedEnumValueChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddLocalizedEnumValueChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddLocalizedEnumValueChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddLocalizedEnumValueChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
