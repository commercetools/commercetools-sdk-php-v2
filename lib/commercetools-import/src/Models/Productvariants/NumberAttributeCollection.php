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
 * @extends MapperSequence<NumberAttribute>
 * @method NumberAttribute current()
 * @method NumberAttribute at($offset)
 */
class NumberAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert NumberAttribute $value
     * @psalm-param NumberAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NumberAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof NumberAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NumberAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?NumberAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = NumberAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
