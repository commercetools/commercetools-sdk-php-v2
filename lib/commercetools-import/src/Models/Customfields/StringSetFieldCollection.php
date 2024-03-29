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
 * @extends CustomFieldCollection<StringSetField>
 * @method StringSetField current()
 * @method StringSetField end()
 * @method StringSetField at($offset)
 */
class StringSetFieldCollection extends CustomFieldCollection
{
    /**
     * @psalm-assert StringSetField $value
     * @psalm-param StringSetField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StringSetFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof StringSetField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StringSetField
     */
    protected function mapper()
    {
        return function (?int $index): ?StringSetField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StringSetField $data */
                $data = StringSetFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
