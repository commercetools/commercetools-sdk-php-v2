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
 * @extends MapperSequence<SubscriptionChangeDestinationAction>
 * @method SubscriptionChangeDestinationAction current()
 * @method SubscriptionChangeDestinationAction at($offset)
 */
class SubscriptionChangeDestinationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SubscriptionChangeDestinationAction $value
     * @psalm-param SubscriptionChangeDestinationAction|stdClass $value
     * @return SubscriptionChangeDestinationActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionChangeDestinationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionChangeDestinationAction
     */
    protected function mapper()
    {
        return function(int $index): ?SubscriptionChangeDestinationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SubscriptionChangeDestinationActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}