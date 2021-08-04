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
 * @extends CustomFieldCollection<DateField>
 * @method DateField current()
 * @method DateField end()
 * @method DateField at($offset)
 */
class DateFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert DateField $value
     * @psalm-param DateField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DateFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof DateField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateField
     */
    protected function mapper()
    {
        return function (?int $index): ?DateField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DateField $data */
                $data = DateFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
