<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChannelChangeDescriptionAction extends ChannelUpdateAction
{
    public const FIELD_DESCRIPTION = 'description';

    /**
     * <p>New value to set. Must not be empty.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription();

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void;
}
