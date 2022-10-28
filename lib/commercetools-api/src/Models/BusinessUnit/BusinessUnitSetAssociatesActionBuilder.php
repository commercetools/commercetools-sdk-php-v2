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
 * @implements Builder<BusinessUnitSetAssociatesAction>
 */
final class BusinessUnitSetAssociatesActionBuilder implements Builder
{
    /**

     * @var ?AssociateDraftCollection
     */
    private $associates;

    /**
     * <p>The new list of Associates. If not provided, any existing list is removed.</p>
     *

     * @return null|AssociateDraftCollection
     */
    public function getAssociates()
    {
        return $this->associates;
    }

    /**
     * @param ?AssociateDraftCollection $associates
     * @return $this
     */
    public function withAssociates(?AssociateDraftCollection $associates)
    {
        $this->associates = $associates;

        return $this;
    }


    public function build(): BusinessUnitSetAssociatesAction
    {
        return new BusinessUnitSetAssociatesActionModel(
            $this->associates
        );
    }

    public static function of(): BusinessUnitSetAssociatesActionBuilder
    {
        return new self();
    }
}
