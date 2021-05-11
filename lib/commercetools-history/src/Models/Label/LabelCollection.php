<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of Label
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method Label current()
 * @method Label at($offset)
 */
class LabelCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LabelCollection
     */
    public function add($value)
    {
        if (!$value instanceof Label) {
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
        return function (int $index): ?Label {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = LabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
