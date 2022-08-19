<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderLineItemDistributionChannelSetMessagePayloadModel extends JsonObjectModel implements OrderLineItemDistributionChannelSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderLineItemDistributionChannelSet';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?string
     */
    protected $lineItemId;

    /**

     * @var ?ChannelReference
     */
    protected $distributionChannel;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $lineItemId = null,
        ?ChannelReference $distributionChannel = null
    ) {
        $this->lineItemId = $lineItemId;
        $this->distributionChannel = $distributionChannel;
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
     * <p>Unique identifier of the <a href="ctp:api:type:LineItem">Line Item</a>.</p>
     *

     * @return null|string
     */
    public function getLineItemId()
    {
        if (is_null($this->lineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemId = (string) $data;
        }

        return $this->lineItemId;
    }

    /**
     * <p><a href="ctp:api:type:Channel">Distribution Channel</a> that was set.</p>
     *

     * @return null|ChannelReference
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel = ChannelReferenceModel::of($data);
        }

        return $this->distributionChannel;
    }


    /**
     * @param ?string $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @param ?ChannelReference $distributionChannel
     */
    public function setDistributionChannel(?ChannelReference $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
}
