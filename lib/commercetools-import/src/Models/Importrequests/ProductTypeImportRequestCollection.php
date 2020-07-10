<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeImportRequest>
 * @method ProductTypeImportRequest current()
 * @method ProductTypeImportRequest at($offset)
 */
class ProductTypeImportRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeImportRequest $value
     * @psalm-param ProductTypeImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeImportRequest
     */
    protected function mapper()
    {
        return function (int $index): ?ProductTypeImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductTypeImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
