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
 * @extends ImportRequestCollection<CustomerImportRequest>
 * @method CustomerImportRequest current()
 * @method CustomerImportRequest at($offset)
 */
class CustomerImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert CustomerImportRequest $value
     * @psalm-param CustomerImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerImportRequest
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerImportRequest $data */
                $data = CustomerImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
