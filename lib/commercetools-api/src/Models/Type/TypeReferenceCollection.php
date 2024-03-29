<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<TypeReference>
 * @method TypeReference current()
 * @method TypeReference end()
 * @method TypeReference at($offset)
 */
class TypeReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert TypeReference $value
     * @psalm-param TypeReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeReference
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeReference $data */
                $data = TypeReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
