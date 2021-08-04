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
 * @extends AttributeCollection<NumberAttribute>
 * @method NumberAttribute current()
 * @method NumberAttribute at($offset)
 */
class NumberAttributeCollection extends AttributeCollection
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
        return function (?int $index): ?NumberAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var NumberAttribute $data */
                $data = NumberAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
