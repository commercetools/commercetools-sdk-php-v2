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
 * @extends AttributeCollection<DateTimeAttribute>
 * @method DateTimeAttribute current()
 * @method DateTimeAttribute at($offset)
 */
class DateTimeAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert DateTimeAttribute $value
     * @psalm-param DateTimeAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateTimeAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?DateTimeAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DateTimeAttribute $data */
                $data = DateTimeAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
