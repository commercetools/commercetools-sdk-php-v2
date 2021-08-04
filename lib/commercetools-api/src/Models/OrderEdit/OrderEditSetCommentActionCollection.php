<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\OrderEdit\OrderEditUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends OrderEditUpdateActionCollection<OrderEditSetCommentAction>
 * @method OrderEditSetCommentAction current()
 * @method OrderEditSetCommentAction end()
 * @method OrderEditSetCommentAction at($offset)
 */
class OrderEditSetCommentActionCollection extends OrderEditUpdateActionCollection
{
    /**
     * @psalm-assert OrderEditSetCommentAction $value
     * @psalm-param OrderEditSetCommentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditSetCommentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditSetCommentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditSetCommentAction
     */
    protected function mapper()
    {
        return function (?int $index): ?OrderEditSetCommentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditSetCommentAction $data */
                $data = OrderEditSetCommentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
