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
 * @extends MapperSequence<ProductVariantImportRequest>
 * @method ProductVariantImportRequest current()
 * @method ProductVariantImportRequest at($offset)
 */
class ProductVariantImportRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantImportRequest $value
     * @psalm-param ProductVariantImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantImportRequest
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
