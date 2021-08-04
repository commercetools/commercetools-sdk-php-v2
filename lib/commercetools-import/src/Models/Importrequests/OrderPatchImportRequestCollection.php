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
 * @extends ImportRequestCollection<OrderPatchImportRequest>
 * @method OrderPatchImportRequest current()
 * @method OrderPatchImportRequest end()
 * @method OrderPatchImportRequest at($offset)
 */
class OrderPatchImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert OrderPatchImportRequest $value
     * @psalm-param OrderPatchImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPatchImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPatchImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPatchImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPatchImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPatchImportRequest $data */
                $data = OrderPatchImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
