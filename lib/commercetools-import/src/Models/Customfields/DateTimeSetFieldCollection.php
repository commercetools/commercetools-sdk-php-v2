<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Customfields\CustomFieldCollection;
use stdClass;

/**
 * @extends CustomFieldCollection<DateTimeSetField>
 * @method DateTimeSetField current()
 * @method DateTimeSetField end()
 * @method DateTimeSetField at($offset)
 */
class DateTimeSetFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert DateTimeSetField $value
     * @psalm-param DateTimeSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateTimeSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeSetField
     */
    protected function mapper()
    {
        return function (?int $index): ?DateTimeSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DateTimeSetField $data */
                $data = DateTimeSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
