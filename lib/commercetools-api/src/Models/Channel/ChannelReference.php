<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChannelReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded Channel.
     * Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for Channels.</p>
     *
     * @return null|Channel
     */
    public function getObj();

    /**
     * <p>Unique ID of the referenced <a href="ctp:api:type:Channel">Channel</a>.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @param ?Channel $obj
     */
    public function setObj(?Channel $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
