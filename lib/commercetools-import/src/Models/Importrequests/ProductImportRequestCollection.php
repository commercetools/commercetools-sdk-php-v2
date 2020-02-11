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
 * @extends MapperSequence<ProductImportRequest>
 * @method ProductImportRequest current()
 * @method ProductImportRequest at($offset)
 */
class ProductImportRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductImportRequest $value
     * @psalm-param ProductImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductImportRequest
     */
    protected function mapper()
    {
        return function (int $index): ?ProductImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
