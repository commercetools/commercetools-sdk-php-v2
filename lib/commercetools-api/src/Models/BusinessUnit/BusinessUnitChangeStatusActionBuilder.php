<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<BusinessUnitChangeStatusAction>
 */
final class BusinessUnitChangeStatusActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $status;

    /**
     * <p>New status to set.</p>
     *

     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }


    public function build(): BusinessUnitChangeStatusAction
    {
        return new BusinessUnitChangeStatusActionModel(
            $this->status
        );
    }

    public static function of(): BusinessUnitChangeStatusActionBuilder
    {
        return new self();
    }
}
