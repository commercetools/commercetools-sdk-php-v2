<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Api\Models\RecurringOrder\RecurringOrderScopeDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends RecurringOrderScopeDraftCollection<AnyOrderDraft>
 * @method AnyOrderDraft current()
 * @method AnyOrderDraft end()
 * @method AnyOrderDraft at($offset)
 */
class AnyOrderDraftCollection extends RecurringOrderScopeDraftCollection
{
    /**
     * @psalm-assert AnyOrderDraft $value
     * @psalm-param AnyOrderDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AnyOrderDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AnyOrderDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AnyOrderDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?AnyOrderDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AnyOrderDraft $data */
                $data = AnyOrderDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
