<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SubscriptionDraft>
 * @method SubscriptionDraft current()
 * @method SubscriptionDraft end()
 * @method SubscriptionDraft at($offset)
 */
class SubscriptionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert SubscriptionDraft $value
     * @psalm-param SubscriptionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SubscriptionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?SubscriptionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SubscriptionDraft $data */
                $data = SubscriptionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
