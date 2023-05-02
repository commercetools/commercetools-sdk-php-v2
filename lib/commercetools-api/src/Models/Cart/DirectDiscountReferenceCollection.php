<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<DirectDiscountReference>
 * @method DirectDiscountReference current()
 * @method DirectDiscountReference end()
 * @method DirectDiscountReference at($offset)
 */
class DirectDiscountReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert DirectDiscountReference $value
     * @psalm-param DirectDiscountReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DirectDiscountReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof DirectDiscountReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DirectDiscountReference
     */
    protected function mapper()
    {
        return function (?int $index): ?DirectDiscountReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DirectDiscountReference $data */
                $data = DirectDiscountReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
