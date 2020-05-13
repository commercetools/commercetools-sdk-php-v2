<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangeStatusUpdateAction>
 */
final class ChangeStatusUpdateActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $status;

    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }


    public function build(): ChangeStatusUpdateAction
    {
        return new ChangeStatusUpdateActionModel(
            $this->status
        );
    }

    public static function of(): ChangeStatusUpdateActionBuilder
    {
        return new self();
    }
}
