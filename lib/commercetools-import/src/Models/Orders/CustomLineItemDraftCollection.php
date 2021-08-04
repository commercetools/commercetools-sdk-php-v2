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
 * @extends MapperSequence<CustomLineItemDraft>
 * @method CustomLineItemDraft current()
 * @method CustomLineItemDraft end()
 * @method CustomLineItemDraft at($offset)
 */
class CustomLineItemDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomLineItemDraft $value
     * @psalm-param CustomLineItemDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomLineItemDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItemDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItemDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomLineItemDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomLineItemDraft $data */
                $data = CustomLineItemDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
