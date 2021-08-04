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
 * @extends KeyReferenceCollection<CategoryKeyReference>
 * @method CategoryKeyReference current()
 * @method CategoryKeyReference end()
 * @method CategoryKeyReference at($offset)
 */
class CategoryKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert CategoryKeyReference $value
     * @psalm-param CategoryKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CategoryKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryKeyReference $data */
                $data = CategoryKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
