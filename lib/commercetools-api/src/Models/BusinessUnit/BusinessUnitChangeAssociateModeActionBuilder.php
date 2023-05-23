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
 * @implements Builder<BusinessUnitChangeAssociateModeAction>
 */
final class BusinessUnitChangeAssociateModeActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $associateMode;

    /**
     * <p>The new value for <code>associateMode</code>.</p>
     *

     * @return null|string
     */
    public function getAssociateMode()
    {
        return $this->associateMode;
    }

    /**
     * @param ?string $associateMode
     * @return $this
     */
    public function withAssociateMode(?string $associateMode)
    {
        $this->associateMode = $associateMode;

        return $this;
    }


    public function build(): BusinessUnitChangeAssociateModeAction
    {
        return new BusinessUnitChangeAssociateModeActionModel(
            $this->associateMode
        );
    }

    public static function of(): BusinessUnitChangeAssociateModeActionBuilder
    {
        return new self();
    }
}
