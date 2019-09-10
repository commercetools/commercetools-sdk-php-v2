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
 * @extends MapperSequence<IronMqDestination>
 * @method IronMqDestination current()
 * @method IronMqDestination at($offset)
 */
class IronMqDestinationCollection extends MapperSequence
{
    /**
     * @psalm-assert IronMqDestination $value
     * @psalm-param IronMqDestination|stdClass $value
     * @return IronMqDestinationCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof IronMqDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?IronMqDestination
     */
    protected function mapper()
    {
        return function(int $index): ?IronMqDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = IronMqDestinationModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}