<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SyncInfo>
 * @method SyncInfo current()
 * @method SyncInfo at($offset)
 */
class SyncInfoCollection extends MapperSequence
{
    /**
     * @psalm-assert SyncInfo $value
     * @psalm-param SyncInfo|stdClass $value
     * @return SyncInfoCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof SyncInfo) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SyncInfo
     */
    protected function mapper()
    {
        return function(int $index): ?SyncInfo {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SyncInfoModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}