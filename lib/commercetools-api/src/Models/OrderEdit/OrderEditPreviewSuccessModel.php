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
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderEditPreviewSuccessModel extends JsonObjectModel implements OrderEditPreviewSuccess
{
    public const DISCRIMINATOR_VALUE = 'PreviewSuccess';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?StagedOrder
     */
    protected $preview;

    /**
     * @var ?MessagePayloadCollection
     */
    protected $messagePayloads;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StagedOrder $preview = null,
        ?MessagePayloadCollection $messagePayloads = null
    ) {
        $this->preview = $preview;
        $this->messagePayloads = $messagePayloads;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|StagedOrder
     */
    public function getPreview()
    {
        if (is_null($this->preview)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PREVIEW);
            if (is_null($data)) {
                return null;
            }

            $this->preview = StagedOrderModel::of($data);
        }

        return $this->preview;
    }

    /**
     * @return null|MessagePayloadCollection
     */
    public function getMessagePayloads()
    {
        if (is_null($this->messagePayloads)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(self::FIELD_MESSAGE_PAYLOADS);
            if (is_null($data)) {
                return null;
            }
            $this->messagePayloads = MessagePayloadCollection::fromArray($data);
        }

        return $this->messagePayloads;
    }


    /**
     * @param ?StagedOrder $preview
     */
    public function setPreview(?StagedOrder $preview): void
    {
        $this->preview = $preview;
    }

    /**
     * @param ?MessagePayloadCollection $messagePayloads
     */
    public function setMessagePayloads(?MessagePayloadCollection $messagePayloads): void
    {
        $this->messagePayloads = $messagePayloads;
    }
}
