<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductStateTransitionMessage>
 * @method ProductStateTransitionMessage current()
 * @method ProductStateTransitionMessage at($offset)
 */
class ProductStateTransitionMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductStateTransitionMessage $value
     * @psalm-param ProductStateTransitionMessage|stdClass $value
     * @return ProductStateTransitionMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductStateTransitionMessage
     */
    protected function mapper()
    {
        return function(int $index): ?ProductStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}