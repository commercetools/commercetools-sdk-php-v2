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
 * @extends MapperSequence<ProductDraftImportRequest>
 *
 * @method ProductDraftImportRequest current()
 * @method ProductDraftImportRequest at($offset)
 */
class ProductDraftImportRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDraftImportRequest $value
     * @psalm-param ProductDraftImportRequest|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductDraftImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDraftImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDraftImportRequest
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDraftImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDraftImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
