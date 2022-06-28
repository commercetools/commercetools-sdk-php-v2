<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSelectionSettingDraft>
 * @method ProductSelectionSettingDraft current()
 * @method ProductSelectionSettingDraft end()
 * @method ProductSelectionSettingDraft at($offset)
 */
class ProductSelectionSettingDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSelectionSettingDraft $value
     * @psalm-param ProductSelectionSettingDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionSettingDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionSettingDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionSettingDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionSettingDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionSettingDraft $data */
                $data = ProductSelectionSettingDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
