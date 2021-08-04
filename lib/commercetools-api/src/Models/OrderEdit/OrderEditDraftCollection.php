<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditDraft>
 * @method OrderEditDraft current()
 * @method OrderEditDraft end()
 * @method OrderEditDraft at($offset)
 */
class OrderEditDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditDraft $value
     * @psalm-param OrderEditDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderEditDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditDraft $data */
                $data = OrderEditDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
