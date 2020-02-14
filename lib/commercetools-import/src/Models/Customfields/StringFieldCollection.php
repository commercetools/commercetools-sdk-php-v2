<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customfields;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StringField>
 * @method StringField current()
 * @method StringField at($offset)
 */
class StringFieldCollection extends MapperSequence
{
    /**
     * @psalm-assert StringField $value
     * @psalm-param StringField|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StringFieldCollection
     */
    public function add($value)
    {
        if (!$value instanceof StringField) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StringField
     */
    protected function mapper()
    {
        return function (int $index): ?StringField {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StringFieldModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
