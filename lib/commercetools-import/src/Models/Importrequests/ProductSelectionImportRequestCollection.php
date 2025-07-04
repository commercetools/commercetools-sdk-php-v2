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
 * @extends ImportRequestCollection<ProductSelectionImportRequest>
 * @method ProductSelectionImportRequest current()
 * @method ProductSelectionImportRequest end()
 * @method ProductSelectionImportRequest at($offset)
 */
class ProductSelectionImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert ProductSelectionImportRequest $value
     * @psalm-param ProductSelectionImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionImportRequest $data */
                $data = ProductSelectionImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
