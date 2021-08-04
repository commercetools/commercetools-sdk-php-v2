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
 * @extends KeyReferenceCollection<ProductDiscountKeyReference>
 * @method ProductDiscountKeyReference current()
 * @method ProductDiscountKeyReference at($offset)
 */
class ProductDiscountKeyReferenceCollection extends KeyReferenceCollection
{
    /**
     * @psalm-assert ProductDiscountKeyReference $value
     * @psalm-param ProductDiscountKeyReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDiscountKeyReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDiscountKeyReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDiscountKeyReference
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductDiscountKeyReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductDiscountKeyReference $data */
                $data = ProductDiscountKeyReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
