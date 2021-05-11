<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Productvariants\AttributeCollection;
use stdClass;

/**
 * @extends AttributeCollection<NumberSetAttribute>
 * @method NumberSetAttribute current()
 * @method NumberSetAttribute at($offset)
 */
class NumberSetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert NumberSetAttribute $value
     * @psalm-param NumberSetAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return NumberSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof NumberSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?NumberSetAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?NumberSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var NumberSetAttribute $data */
                $data = NumberSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
