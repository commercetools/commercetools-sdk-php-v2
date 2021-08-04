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
 * @extends CustomFieldCollection<DateTimeField>
 * @method DateTimeField current()
 * @method DateTimeField end()
 * @method DateTimeField at($offset)
 */
class DateTimeFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert DateTimeField $value
     * @psalm-param DateTimeField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateTimeFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeField
     */
    protected function mapper()
    {
        return function (?int $index): ?DateTimeField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DateTimeField $data */
                $data = DateTimeFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
