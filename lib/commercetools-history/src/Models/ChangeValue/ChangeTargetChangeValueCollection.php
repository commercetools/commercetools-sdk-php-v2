<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of ChangeTargetChangeValue
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method ChangeTargetChangeValue current()
 * @method ChangeTargetChangeValue at($offset)
 */
class ChangeTargetChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetChangeValue) {
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
        return function (int $index): ?ChangeTargetChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ChangeTargetChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
