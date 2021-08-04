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
 * @extends AttributeCollection<DateTimeSetAttribute>
 * @method DateTimeSetAttribute current()
 * @method DateTimeSetAttribute end()
 * @method DateTimeSetAttribute at($offset)
 */
class DateTimeSetAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert DateTimeSetAttribute $value
     * @psalm-param DateTimeSetAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateTimeSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeSetAttribute
     */
    protected function mapper()
    {
        return function (?int $index): ?DateTimeSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DateTimeSetAttribute $data */
                $data = DateTimeSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
