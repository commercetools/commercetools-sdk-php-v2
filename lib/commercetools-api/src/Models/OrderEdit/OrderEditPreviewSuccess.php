<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Message\MessagePayloadCollection;

interface OrderEditPreviewSuccess extends OrderEditResult
{
    
    const FIELD_PREVIEW = 'preview';
    const FIELD_MESSAGE_PAYLOADS = 'messagePayloads';

    /**
     *
     * @return StagedOrder|null
     */
    public function getPreview();
    
    /**
     *
     * @return MessagePayloadCollection|null
     */
    public function getMessagePayloads();
    public function setPreview(?StagedOrder $preview): void;
    
    public function setMessagePayloads(?MessagePayloadCollection $messagePayloads): void;
}