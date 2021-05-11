<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TextLineItemDraft>
 * @method TextLineItemDraft current()
 * @method TextLineItemDraft at($offset)
 */
class TextLineItemDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TextLineItemDraft $value
     * @psalm-param TextLineItemDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TextLineItemDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof TextLineItemDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TextLineItemDraft
     */
    protected function mapper()
    {
        return function (int $index): ?TextLineItemDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TextLineItemDraft $data */
                $data = TextLineItemDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
