<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MessageSubscription>
 * @method MessageSubscription current()
 * @method MessageSubscription at($offset)
 */
class MessageSubscriptionCollection extends MapperSequence
{
    /**
     * @psalm-assert MessageSubscription $value
     * @psalm-param MessageSubscription|stdClass $value
     * @return MessageSubscriptionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof MessageSubscription) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessageSubscription
     */
    protected function mapper()
    {
        return function(int $index): ?MessageSubscription {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MessageSubscriptionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}