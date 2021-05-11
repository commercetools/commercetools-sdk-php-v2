<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeAssetOrderChange>
 * @method ChangeAssetOrderChange current()
 * @method ChangeAssetOrderChange at($offset)
 */
class ChangeAssetOrderChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangeAssetOrderChange $value
     * @psalm-param ChangeAssetOrderChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAssetOrderChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAssetOrderChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAssetOrderChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAssetOrderChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeAssetOrderChange $data */
                $data = ChangeAssetOrderChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
