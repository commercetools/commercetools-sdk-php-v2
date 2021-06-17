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
 * @extends KeyReferenceCollection<DiscountCodeKeyReference>
 * @method DiscountCodeKeyReference current()
 * @method DiscountCodeKeyReference at($offset)
 */
class DiscountCodeKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert DiscountCodeKeyReference $value
     * @psalm-param DiscountCodeKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeKeyReference
     */
    protected function mapper()
    {
        return function (int $index): ?DiscountCodeKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeKeyReference $data */
                $data = DiscountCodeKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
