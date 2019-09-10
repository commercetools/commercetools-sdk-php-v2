<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Message\MessagePayloadCollection;

interface OrderEditPreviewSuccess extends OrderEditResult
{
    const FIELD_PREVIEW = 'preview';
    const FIELD_MESSAGE_PAYLOADS = 'messagePayloads';

    /**
     * @return null|StagedOrder
     */
    public function getPreview();

    /**
     * @return null|MessagePayloadCollection
     */
    public function getMessagePayloads();

    public function setPreview(?StagedOrder $preview): void;

    public function setMessagePayloads(?MessagePayloadCollection $messagePayloads): void;
}
