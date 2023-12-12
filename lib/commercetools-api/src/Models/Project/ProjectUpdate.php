<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectUpdate extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p>Expected version of the Project on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Update actions to be performed on the Project.</p>
     *

     * @return null|ProjectUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?ProjectUpdateActionCollection $actions
     */
    public function setActions(?ProjectUpdateActionCollection $actions): void;
}
