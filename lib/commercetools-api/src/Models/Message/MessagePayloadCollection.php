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
 * @extends MapperSequence<MessagePayload>
 * @method MessagePayload current()
 * @method MessagePayload at($offset)
 */
class MessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert MessagePayload $value
     * @psalm-param MessagePayload|stdClass $value
     * @return MessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof MessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?MessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}