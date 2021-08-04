<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\KeyReferenceCollection;
use stdClass;

/**
 * @extends KeyReferenceCollection<TypeKeyReference>
 * @method TypeKeyReference current()
 * @method TypeKeyReference end()
 * @method TypeKeyReference at($offset)
 */
class TypeKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert TypeKeyReference $value
     * @psalm-param TypeKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeKeyReference $data */
                $data = TypeKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
