<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSelectionSetting>
 * @method ProductSelectionSetting current()
 * @method ProductSelectionSetting end()
 * @method ProductSelectionSetting at($offset)
 */
class ProductSelectionSettingCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSelectionSetting $value
     * @psalm-param ProductSelectionSetting|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionSettingCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionSetting) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionSetting
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionSetting {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionSetting $data */
                $data = ProductSelectionSettingModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
