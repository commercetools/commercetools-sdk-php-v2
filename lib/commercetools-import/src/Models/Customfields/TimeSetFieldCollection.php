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
 * @extends CustomFieldCollection<TimeSetField>
 * @method TimeSetField current()
 * @method TimeSetField end()
 * @method TimeSetField at($offset)
 */
class TimeSetFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert TimeSetField $value
     * @psalm-param TimeSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TimeSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof TimeSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TimeSetField
     */
    protected function mapper()
    {
        return function (?int $index): ?TimeSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TimeSetField $data */
                $data = TimeSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
