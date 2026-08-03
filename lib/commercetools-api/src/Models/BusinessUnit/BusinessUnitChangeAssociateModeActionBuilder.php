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

     * @var ?bool
     */
    private $makeInheritedAssociatesExplicit;

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
     * <p>Whether all inherited Associates are converted to explicit Associates during a change to <code>associateMode=&quot;Explicit&quot;</code>.</p>
     *

     * @return null|bool
     */
    public function getMakeInheritedAssociatesExplicit()
    {
        return $this->makeInheritedAssociatesExplicit;
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

    /**
     * @param ?bool $makeInheritedAssociatesExplicit
     * @return $this
     */
    public function withMakeInheritedAssociatesExplicit(?bool $makeInheritedAssociatesExplicit)
    {
        $this->makeInheritedAssociatesExplicit = $makeInheritedAssociatesExplicit;

        return $this;
    }


    public function build(): BusinessUnitChangeAssociateModeAction
    {
        return new BusinessUnitChangeAssociateModeActionModel(
            $this->associateMode,
            $this->makeInheritedAssociatesExplicit
        );
    }

    public static function of(): BusinessUnitChangeAssociateModeActionBuilder
    {
        return new self();
    }
}
