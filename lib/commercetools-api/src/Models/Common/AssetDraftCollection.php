<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AssetDraft>
 * @method AssetDraft current()
 * @method AssetDraft at($offset)
 */
class AssetDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert AssetDraft $value
     * @psalm-param AssetDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AssetDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof AssetDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AssetDraft
     */
    protected function mapper()
    {
        return function (int $index): ?AssetDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AssetDraft $data */
                $data = AssetDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
