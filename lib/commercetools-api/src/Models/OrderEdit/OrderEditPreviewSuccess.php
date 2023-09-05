<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditPreviewSuccess extends OrderEditResult
{
    public const FIELD_PREVIEW = 'preview';
    public const FIELD_MESSAGE_PAYLOADS = 'messagePayloads';

    /**
     * <p>A preview of the edited <a href="ctp:api:type:Order">Order</a> as it will be after all <code>stagedActions</code> (incl. optional Order <a href="/../api/projects/api-extensions">API Extensions</a>) are applied.</p>
     *

     * @return null|StagedOrder
     */
    public function getPreview();

    /**
     * <p>Messages that will be generated if the edit is applied.</p>
     *

     * @return null|MessagePayloadCollection
     */
    public function getMessagePayloads();

    /**
     * @param ?StagedOrder $preview
     */
    public function setPreview(?StagedOrder $preview): void;

    /**
     * @param ?MessagePayloadCollection $messagePayloads
     */
    public function setMessagePayloads(?MessagePayloadCollection $messagePayloads): void;
}
