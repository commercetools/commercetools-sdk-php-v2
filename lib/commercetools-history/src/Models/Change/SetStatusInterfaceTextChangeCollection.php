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
 * @extends MapperSequence<SetStatusInterfaceTextChange>
 * @method SetStatusInterfaceTextChange current()
 * @method SetStatusInterfaceTextChange at($offset)
 */
class SetStatusInterfaceTextChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetStatusInterfaceTextChange $value
     * @psalm-param SetStatusInterfaceTextChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStatusInterfaceTextChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStatusInterfaceTextChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStatusInterfaceTextChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetStatusInterfaceTextChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetStatusInterfaceTextChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
