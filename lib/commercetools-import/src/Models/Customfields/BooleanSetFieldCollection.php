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
 * @extends CustomFieldCollection<BooleanSetField>
 * @method BooleanSetField current()
 * @method BooleanSetField at($offset)
 */
class BooleanSetFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert BooleanSetField $value
     * @psalm-param BooleanSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return BooleanSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof BooleanSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?BooleanSetField
     */
    protected function mapper()
    {
        return function (?int $index): ?BooleanSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var BooleanSetField $data */
                $data = BooleanSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
