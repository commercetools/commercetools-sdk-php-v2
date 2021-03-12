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
 * @extends MapperSequence<SetAssetCustomTypeAction>
 * @method SetAssetCustomTypeAction current()
 * @method SetAssetCustomTypeAction at($offset)
 */
class SetAssetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAssetCustomTypeAction $value
     * @psalm-param SetAssetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAssetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
