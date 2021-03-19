<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetAssetKeyChange>
 * @method SetAssetKeyChange current()
 * @method SetAssetKeyChange at($offset)
 */
class SetAssetKeyChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAssetKeyChange $value
     * @psalm-param SetAssetKeyChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetKeyChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetKeyChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetKeyChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetKeyChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAssetKeyChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
