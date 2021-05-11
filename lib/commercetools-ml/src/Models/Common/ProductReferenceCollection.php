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
 * @extends ReferenceCollection<ProductReference>
 * @method ProductReference current()
 * @method ProductReference at($offset)
 */
class ProductReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert ProductReference $value
     * @psalm-param ProductReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductReference
     */
    protected function mapper()
    {
        return function (int $index): ?ProductReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductReference $data */
                $data = ProductReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
