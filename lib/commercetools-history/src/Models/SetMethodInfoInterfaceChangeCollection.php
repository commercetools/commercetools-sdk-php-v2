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
 * @extends MapperSequence<SetMethodInfoInterfaceChange>
 * @method SetMethodInfoInterfaceChange current()
 * @method SetMethodInfoInterfaceChange at($offset)
 */
class SetMethodInfoInterfaceChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMethodInfoInterfaceChange $value
     * @psalm-param SetMethodInfoInterfaceChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoInterfaceChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoInterfaceChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoInterfaceChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetMethodInfoInterfaceChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMethodInfoInterfaceChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
