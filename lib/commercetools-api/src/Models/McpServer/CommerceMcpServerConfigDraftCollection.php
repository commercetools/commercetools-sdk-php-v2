<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Api\Models\McpServer\McpServerConfigDraftCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends McpServerConfigDraftCollection<CommerceMcpServerConfigDraft>
 * @method CommerceMcpServerConfigDraft current()
 * @method CommerceMcpServerConfigDraft end()
 * @method CommerceMcpServerConfigDraft at($offset)
 */
class CommerceMcpServerConfigDraftCollection extends McpServerConfigDraftCollection
{
    /**
     * @psalm-assert CommerceMcpServerConfigDraft $value
     * @psalm-param CommerceMcpServerConfigDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CommerceMcpServerConfigDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CommerceMcpServerConfigDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CommerceMcpServerConfigDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CommerceMcpServerConfigDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CommerceMcpServerConfigDraft $data */
                $data = CommerceMcpServerConfigDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
