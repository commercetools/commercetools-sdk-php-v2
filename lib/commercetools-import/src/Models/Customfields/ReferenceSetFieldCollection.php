<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReferenceSetField>
 * @method ReferenceSetField current()
 * @method ReferenceSetField at($offset)
 */
class ReferenceSetFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert ReferenceSetField $value
     * @psalm-param ReferenceSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferenceSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferenceSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferenceSetField
     */
    protected function mapper()
    {
        return function (int $index): ?ReferenceSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReferenceSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
