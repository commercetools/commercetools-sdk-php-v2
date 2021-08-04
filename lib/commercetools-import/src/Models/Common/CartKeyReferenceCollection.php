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
 * @extends KeyReferenceCollection<CartKeyReference>
 * @method CartKeyReference current()
 * @method CartKeyReference end()
 * @method CartKeyReference at($offset)
 */
class CartKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert CartKeyReference $value
     * @psalm-param CartKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CartKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof CartKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?CartKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CartKeyReference $data */
                $data = CartKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
