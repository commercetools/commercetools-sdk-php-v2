<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<FieldDefinitionOrderValue>
 * @method FieldDefinitionOrderValue current()
 * @method FieldDefinitionOrderValue at($offset)
 */
class FieldDefinitionOrderValueCollection extends MapperSequence
{
    /**
     * @psalm-assert FieldDefinitionOrderValue $value
     * @psalm-param FieldDefinitionOrderValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return FieldDefinitionOrderValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof FieldDefinitionOrderValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?FieldDefinitionOrderValue
     */
    protected function mapper()
    {
        return function (?int $index): ?FieldDefinitionOrderValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var FieldDefinitionOrderValue $data */
                $data = FieldDefinitionOrderValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
