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
 * @extends MapperSequence<OrderImportRequest>
 * @method OrderImportRequest current()
 * @method OrderImportRequest at($offset)
 */
class OrderImportRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderImportRequest $value
     * @psalm-param OrderImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderImportRequest
     */
    protected function mapper()
    {
        return function (int $index): ?OrderImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
