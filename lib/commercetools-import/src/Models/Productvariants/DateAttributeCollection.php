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
 * @extends AttributeCollection<DateAttribute>
 * @method DateAttribute current()
 * @method DateAttribute at($offset)
 */
class DateAttributeCollection extends AttributeCollection
{
    /**
     * @psalm-assert DateAttribute $value
     * @psalm-param DateAttribute|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateAttribute
     */
    protected function mapper()
    {
        return function (?int $index): ?DateAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DateAttribute $data */
                $data = DateAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
