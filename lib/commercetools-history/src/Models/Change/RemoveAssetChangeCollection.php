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
 * @extends ChangeCollection<RemoveAssetChange>
 * @method RemoveAssetChange current()
 * @method RemoveAssetChange end()
 * @method RemoveAssetChange at($offset)
 */
class RemoveAssetChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveAssetChange $value
     * @psalm-param RemoveAssetChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveAssetChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveAssetChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveAssetChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveAssetChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveAssetChange $data */
                $data = RemoveAssetChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
