<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of KeyReference
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method KeyReference current()
 * @method KeyReference at($offset)
 */
class KeyReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?KeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = KeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
