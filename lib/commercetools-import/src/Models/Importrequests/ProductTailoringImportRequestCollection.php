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
 * @extends ImportRequestCollection<ProductTailoringImportRequest>
 * @method ProductTailoringImportRequest current()
 * @method ProductTailoringImportRequest end()
 * @method ProductTailoringImportRequest at($offset)
 */
class ProductTailoringImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert ProductTailoringImportRequest $value
     * @psalm-param ProductTailoringImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringImportRequest $data */
                $data = ProductTailoringImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
