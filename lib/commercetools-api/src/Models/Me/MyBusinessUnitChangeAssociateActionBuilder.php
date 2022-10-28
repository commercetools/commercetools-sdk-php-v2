<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\BusinessUnit\AssociateDraft;
use Commercetools\Api\Models\BusinessUnit\AssociateDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyBusinessUnitChangeAssociateAction>
 */
final class MyBusinessUnitChangeAssociateActionBuilder implements Builder
{
    /**

     * @var null|AssociateDraft|AssociateDraftBuilder
     */
    private $associate;

    /**
     * <p>The Associate to add.</p>
     *

     * @return null|AssociateDraft
     */
    public function getAssociate()
    {
        return $this->associate instanceof AssociateDraftBuilder ? $this->associate->build() : $this->associate;
    }

    /**
     * @param ?AssociateDraft $associate
     * @return $this
     */
    public function withAssociate(?AssociateDraft $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    /**
     * @deprecated use withAssociate() instead
     * @return $this
     */
    public function withAssociateBuilder(?AssociateDraftBuilder $associate)
    {
        $this->associate = $associate;

        return $this;
    }

    public function build(): MyBusinessUnitChangeAssociateAction
    {
        return new MyBusinessUnitChangeAssociateActionModel(
            $this->associate instanceof AssociateDraftBuilder ? $this->associate->build() : $this->associate
        );
    }

    public static function of(): MyBusinessUnitChangeAssociateActionBuilder
    {
        return new self();
    }
}
