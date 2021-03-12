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
 * @extends MapperSequence<Label>
 * @method Label current()
 * @method Label at($offset)
 */
class LabelCollection extends MapperSequence
{
    /**
     * @psalm-assert Label $value
     * @psalm-param Label|stdClass $value
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
     * @psalm-return callable(int):?Label
     */
    protected function mapper()
    {
        return function (int $index): ?Label {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LabelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
