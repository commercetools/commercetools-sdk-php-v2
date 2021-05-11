<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Importrequests\ImportRequestCollection;
use stdClass;

/**
 * @extends ImportRequestCollection<ProductVariantPatchRequest>
 * @method ProductVariantPatchRequest current()
 * @method ProductVariantPatchRequest at($offset)
 */
class ProductVariantPatchRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert ProductVariantPatchRequest $value
     * @psalm-param ProductVariantPatchRequest|stdClass $value
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
                /** @var ProductVariantPatchRequest $data */
                $data = ProductVariantPatchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
