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
 * @extends ImportRequestCollection<DiscountCodeImportRequest>
 * @method DiscountCodeImportRequest current()
 * @method DiscountCodeImportRequest end()
 * @method DiscountCodeImportRequest at($offset)
 */
class DiscountCodeImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert DiscountCodeImportRequest $value
     * @psalm-param DiscountCodeImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountCodeImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountCodeImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountCodeImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountCodeImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountCodeImportRequest $data */
                $data = DiscountCodeImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
