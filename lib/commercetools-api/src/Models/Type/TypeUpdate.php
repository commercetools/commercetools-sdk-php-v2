<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypeUpdate extends JsonObject
{
    public const FIELD_VERSION = 'version';
    public const FIELD_ACTIONS = 'actions';

    /**
     * <p>Expected version of the type on which the changes should be applied.
     * If the expected version does not match the actual version, a 409 Conflict will be returned.</p>
     *
     * @return null|int
     */
    public function getVersion();

    /**
     * <p>Update actions to be performed on the Type.</p>
     *
     * @return null|TypeUpdateActionCollection
     */
    public function getActions();

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?TypeUpdateActionCollection $actions
     */
    public function setActions(?TypeUpdateActionCollection $actions): void;
}
