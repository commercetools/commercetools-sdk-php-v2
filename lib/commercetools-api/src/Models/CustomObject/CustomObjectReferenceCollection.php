<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<CustomObjectReference>
 * @method CustomObjectReference current()
 * @method CustomObjectReference at($offset)
 */
class CustomObjectReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert CustomObjectReference $value
     * @psalm-param CustomObjectReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomObjectReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomObjectReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomObjectReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomObjectReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomObjectReference $data */
                $data = CustomObjectReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
