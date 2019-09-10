<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\State;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StateResourceIdentifier>
 * @method StateResourceIdentifier current()
 * @method StateResourceIdentifier at($offset)
 */
class StateResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert StateResourceIdentifier $value
     * @psalm-param StateResourceIdentifier|stdClass $value
     * @return StateResourceIdentifierCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof StateResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StateResourceIdentifier
     */
    protected function mapper()
    {
        return function(int $index): ?StateResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StateResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}