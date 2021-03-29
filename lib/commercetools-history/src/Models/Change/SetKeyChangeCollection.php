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
 * @extends MapperSequence<SetKeyChange>
 * @method SetKeyChange current()
 * @method SetKeyChange at($offset)
 */
class SetKeyChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetKeyChange $value
     * @psalm-param SetKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetKeyChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
