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
 * @extends CustomFieldCollection<LocalizedEnumField>
 * @method LocalizedEnumField current()
 * @method LocalizedEnumField at($offset)
 */
class LocalizedEnumFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert LocalizedEnumField $value
     * @psalm-param LocalizedEnumField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LocalizedEnumFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof LocalizedEnumField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LocalizedEnumField
     */
    protected function mapper()
    {
        return function (?int $index): ?LocalizedEnumField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LocalizedEnumField $data */
                $data = LocalizedEnumFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
