<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of WarningObject
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method WarningObject current()
 * @method WarningObject end()
 * @method WarningObject at($offset)
 */
class WarningObjectCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return WarningObjectCollection
     */
    public function add($value)
    {
        if (!$value instanceof WarningObject) {
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
        return function (?int $index): ?WarningObject {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = WarningObjectModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
