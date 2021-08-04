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
 * @extends ImportRequestCollection<ProductTypeImportRequest>
 * @method ProductTypeImportRequest current()
 * @method ProductTypeImportRequest end()
 * @method ProductTypeImportRequest at($offset)
 */
class ProductTypeImportRequestCollection extends ImportRequestCollection
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
        return function (?int $index): ?ProductTypeImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeImportRequest $data */
                $data = ProductTypeImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
