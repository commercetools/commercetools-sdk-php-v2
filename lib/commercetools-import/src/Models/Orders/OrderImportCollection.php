<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderImport>
 * @method OrderImport current()
 * @method OrderImport at($offset)
 */
class OrderImportCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderImport $value
     * @psalm-param OrderImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderImport
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderImport $data */
                $data = OrderImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
