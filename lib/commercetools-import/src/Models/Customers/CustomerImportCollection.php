<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Customers;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<CustomerImport>
 * @method CustomerImport current()
 * @method CustomerImport end()
 * @method CustomerImport at($offset)
 */
class CustomerImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert CustomerImport $value
     * @psalm-param CustomerImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerImport
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerImport $data */
                $data = CustomerImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
