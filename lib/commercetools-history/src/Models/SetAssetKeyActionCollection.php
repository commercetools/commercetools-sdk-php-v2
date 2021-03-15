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
 * @extends MapperSequence<SetAssetKeyAction>
 * @method SetAssetKeyAction current()
 * @method SetAssetKeyAction at($offset)
 */
class SetAssetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAssetKeyAction $value
     * @psalm-param SetAssetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAssetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
