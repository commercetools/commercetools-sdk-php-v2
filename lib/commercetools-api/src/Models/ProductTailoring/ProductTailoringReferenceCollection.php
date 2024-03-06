<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<ProductTailoringReference>
 * @method ProductTailoringReference current()
 * @method ProductTailoringReference end()
 * @method ProductTailoringReference at($offset)
 */
class ProductTailoringReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ProductTailoringReference $value
     * @psalm-param ProductTailoringReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringReference
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringReference $data */
                $data = ProductTailoringReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
