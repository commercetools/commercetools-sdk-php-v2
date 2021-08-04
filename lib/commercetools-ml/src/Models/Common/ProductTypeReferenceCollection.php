<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\Common;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Ml\Models\Common\ReferenceCollection;
use stdClass;

/**
 * @extends ReferenceCollection<ProductTypeReference>
 * @method ProductTypeReference current()
 * @method ProductTypeReference end()
 * @method ProductTypeReference at($offset)
 */
class ProductTypeReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ProductTypeReference $value
     * @psalm-param ProductTypeReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeReference
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeReference $data */
                $data = ProductTypeReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
