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
 * @extends MapperSequence<MessageConfigurationDraft>
 * @method MessageConfigurationDraft current()
 * @method MessageConfigurationDraft at($offset)
 */
class MessageConfigurationDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MessageConfigurationDraft $value
     * @psalm-param MessageConfigurationDraft|stdClass $value
     * @return MessageConfigurationDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof MessageConfigurationDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MessageConfigurationDraft
     */
    protected function mapper()
    {
        return function(int $index): ?MessageConfigurationDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MessageConfigurationDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}