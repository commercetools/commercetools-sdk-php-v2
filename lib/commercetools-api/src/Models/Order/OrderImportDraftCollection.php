<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderImportDraft>
 * @method OrderImportDraft current()
 * @method OrderImportDraft at($offset)
 */
class OrderImportDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderImportDraft $value
     * @psalm-param OrderImportDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderImportDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderImportDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderImportDraft
     */
    protected function mapper()
    {
        return function (int $index): ?OrderImportDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderImportDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
