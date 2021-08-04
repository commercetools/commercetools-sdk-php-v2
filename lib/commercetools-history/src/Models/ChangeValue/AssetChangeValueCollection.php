<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssetChangeValue>
 * @method AssetChangeValue current()
 * @method AssetChangeValue end()
 * @method AssetChangeValue at($offset)
 */
class AssetChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert AssetChangeValue $value
     * @psalm-param AssetChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssetChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssetChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssetChangeValue
     */
    protected function mapper()
    {
        return function (?int $index): ?AssetChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssetChangeValue $data */
                $data = AssetChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
