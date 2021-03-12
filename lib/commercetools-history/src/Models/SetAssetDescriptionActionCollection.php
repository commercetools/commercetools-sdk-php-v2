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
 * @extends MapperSequence<SetAssetDescriptionAction>
 * @method SetAssetDescriptionAction current()
 * @method SetAssetDescriptionAction at($offset)
 */
class SetAssetDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAssetDescriptionAction $value
     * @psalm-param SetAssetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAssetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
