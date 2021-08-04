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
 * @extends CustomFieldCollection<LocalizedEnumSetField>
 * @method LocalizedEnumSetField current()
 * @method LocalizedEnumSetField at($offset)
 */
class LocalizedEnumSetFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert LocalizedEnumSetField $value
     * @psalm-param LocalizedEnumSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizedEnumSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizedEnumSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizedEnumSetField
     */
    protected function mapper()
    {
        return function (?int $index): ?LocalizedEnumSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LocalizedEnumSetField $data */
                $data = LocalizedEnumSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
