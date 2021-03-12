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
 * @extends MapperSequence<SetAssetSourcesAction>
 * @method SetAssetSourcesAction current()
 * @method SetAssetSourcesAction at($offset)
 */
class SetAssetSourcesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAssetSourcesAction $value
     * @psalm-param SetAssetSourcesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetSourcesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetSourcesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetSourcesAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetSourcesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAssetSourcesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
