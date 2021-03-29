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
 * @extends MapperSequence<AddExternalImageChange>
 * @method AddExternalImageChange current()
 * @method AddExternalImageChange at($offset)
 */
class AddExternalImageChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddExternalImageChange $value
     * @psalm-param AddExternalImageChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddExternalImageChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddExternalImageChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddExternalImageChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddExternalImageChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddExternalImageChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
