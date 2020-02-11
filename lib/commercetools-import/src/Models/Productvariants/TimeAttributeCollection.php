<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TimeAttribute>
 * @method TimeAttribute current()
 * @method TimeAttribute at($offset)
 */
class TimeAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert TimeAttribute $value
     * @psalm-param TimeAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TimeAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof TimeAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TimeAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?TimeAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TimeAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
