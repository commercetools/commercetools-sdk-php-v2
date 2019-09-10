<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Channel>
 * @method Channel current()
 * @method Channel at($offset)
 */
class ChannelCollection extends MapperSequence
{
    /**
     * @psalm-assert Channel $value
     * @psalm-param Channel|stdClass $value
     * @return ChannelCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof Channel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Channel
     */
    protected function mapper()
    {
        return function(int $index): ?Channel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChannelModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}