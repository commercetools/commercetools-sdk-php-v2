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
 * @extends CustomFieldCollection<EnumField>
 * @method EnumField current()
 * @method EnumField at($offset)
 */
class EnumFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert EnumField $value
     * @psalm-param EnumField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EnumFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof EnumField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EnumField
     */
    protected function mapper()
    {
        return function (?int $index): ?EnumField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EnumField $data */
                $data = EnumFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
