<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LineItemDraft>
 * @method LineItemDraft current()
 * @method LineItemDraft at($offset)
 */
class LineItemDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemDraft $value
     * @psalm-param LineItemDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemDraft
     */
    protected function mapper()
    {
        return function (int $index): ?LineItemDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LineItemDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
