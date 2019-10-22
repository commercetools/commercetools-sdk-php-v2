<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantPatchRequest>
 *
 * @method ProductVariantPatchRequest current()
 * @method ProductVariantPatchRequest at($offset)
 */
class ProductVariantPatchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantPatchRequest $value
     * @psalm-param ProductVariantPatchRequest|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductVariantPatchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantPatchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantPatchRequest
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantPatchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantPatchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
