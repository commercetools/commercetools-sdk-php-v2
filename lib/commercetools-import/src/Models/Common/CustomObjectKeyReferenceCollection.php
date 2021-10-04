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
 * @extends KeyReferenceCollection<CustomObjectKeyReference>
 * @method CustomObjectKeyReference current()
 * @method CustomObjectKeyReference end()
 * @method CustomObjectKeyReference at($offset)
 */
class CustomObjectKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert CustomObjectKeyReference $value
     * @psalm-param CustomObjectKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomObjectKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomObjectKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomObjectKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomObjectKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomObjectKeyReference $data */
                $data = CustomObjectKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
