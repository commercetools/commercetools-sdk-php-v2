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
 * @extends MapperSequence<SubscriptionPagedQueryResponse>
 * @method SubscriptionPagedQueryResponse current()
 * @method SubscriptionPagedQueryResponse at($offset)
 */
class SubscriptionPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert SubscriptionPagedQueryResponse $value
     * @psalm-param SubscriptionPagedQueryResponse|stdClass $value
     * @return SubscriptionPagedQueryResponseCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof SubscriptionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SubscriptionPagedQueryResponse
     */
    protected function mapper()
    {
        return function(int $index): ?SubscriptionPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SubscriptionPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}