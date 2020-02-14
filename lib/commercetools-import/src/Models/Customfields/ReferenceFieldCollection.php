<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReferenceField>
 * @method ReferenceField current()
 * @method ReferenceField at($offset)
 */
class ReferenceFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert ReferenceField $value
     * @psalm-param ReferenceField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ReferenceFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferenceField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferenceField
     */
    protected function mapper()
    {
        return function (int $index): ?ReferenceField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReferenceFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
