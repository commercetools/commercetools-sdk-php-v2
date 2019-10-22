<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<KeyReference>
 *
 * @method KeyReference current()
 * @method KeyReference at($offset)
 */
class KeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert KeyReference $value
     * @psalm-param KeyReference|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return KeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof KeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?KeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?KeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = KeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
