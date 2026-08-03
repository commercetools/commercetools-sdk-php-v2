<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitChangeAssociateModeAction extends BusinessUnitUpdateAction
{
    public const FIELD_ASSOCIATE_MODE = 'associateMode';
    public const FIELD_MAKE_INHERITED_ASSOCIATES_EXPLICIT = 'makeInheritedAssociatesExplicit';

    /**
     * <p>The new value for <code>associateMode</code>.</p>
     *

     * @return null|string
     */
    public function getAssociateMode();

    /**
     * <p>Whether all inherited Associates are converted to explicit Associates during a change to <code>associateMode=&quot;Explicit&quot;</code>.</p>
     *

     * @return null|bool
     */
    public function getMakeInheritedAssociatesExplicit();

    /**
     * @param ?string $associateMode
     */
    public function setAssociateMode(?string $associateMode): void;

    /**
     * @param ?bool $makeInheritedAssociatesExplicit
     */
    public function setMakeInheritedAssociatesExplicit(?bool $makeInheritedAssociatesExplicit): void;
}
