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
 * @extends ChangeCollection<SetAssetSourcesChange>
 * @method SetAssetSourcesChange current()
 * @method SetAssetSourcesChange end()
 * @method SetAssetSourcesChange at($offset)
 */
class SetAssetSourcesChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAssetSourcesChange $value
     * @psalm-param SetAssetSourcesChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetSourcesChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetSourcesChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetSourcesChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetAssetSourcesChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAssetSourcesChange $data */
                $data = SetAssetSourcesChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
