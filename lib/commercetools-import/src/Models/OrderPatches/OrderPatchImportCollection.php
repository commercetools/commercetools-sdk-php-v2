<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderPatchImport>
 * @method OrderPatchImport current()
 * @method OrderPatchImport at($offset)
 */
class OrderPatchImportCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderPatchImport $value
     * @psalm-param OrderPatchImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderPatchImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderPatchImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPatchImport
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderPatchImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderPatchImport $data */
                $data = OrderPatchImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
