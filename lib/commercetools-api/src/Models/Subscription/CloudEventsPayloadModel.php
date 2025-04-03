<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class CloudEventsPayloadModel extends JsonObjectModel implements CloudEventsPayload
{
    public const DISCRIMINATOR_VALUE = 'CloudEvents';
    /**
     *
     * @var ?string
     */
    protected $specversion;

    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $source;

    /**
     *
     * @var ?string
     */
    protected $subject;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $time;

    /**
     *
     * @var ?string
     */
    protected $sequence;

    /**
     *
     * @var ?string
     */
    protected $sequencetype;

    /**
     *
     * @var ?string
     */
    protected $dataref;

    /**
     *
     * @var ?DeliveryPayload
     */
    protected $data;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $specversion = null,
        ?string $id = null,
        ?string $type = null,
        ?string $source = null,
        ?string $subject = null,
        ?DateTimeImmutable $time = null,
        ?string $sequence = null,
        ?string $sequencetype = null,
        ?string $dataref = null,
        ?DeliveryPayload $data = null
    ) {
        $this->specversion = $specversion;
        $this->id = $id;
        $this->type = $type;
        $this->source = $source;
        $this->subject = $subject;
        $this->time = $time;
        $this->sequence = $sequence;
        $this->sequencetype = $sequencetype;
        $this->dataref = $dataref;
        $this->data = $data;
    }

    /**
     * <p>The version of the <a href="https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/spec.md">CloudEvents</a> specification which the event uses.</p>
     *
     *
     * @return null|string
     */
    public function getSpecversion()
    {
        if (is_null($this->specversion)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SPECVERSION);
            if (is_null($data)) {
                return null;
            }
            $this->specversion = (string) $data;
        }

        return $this->specversion;
    }

    /**
     * <p>Unique identifier of the event.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The <code>type</code> is namespaced with <code>com.commercetools</code>, followed by the <a href="ctp:api:type:ReferenceTypeId">ReferenceTypeId</a>, the type of Subscription (either <code>message</code> or <code>change</code>), and the message or change type.
     * For example, <code>com.commercetools.product.message.ProductPublished</code> or <code>com.commercetools.order.change.ResourceCreated</code>.</p>
     *
     *
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
     * <p>The default REST URI of the <a href="ctp:api:type:ReferenceTypeId">ReferenceTypeId</a> that triggered this event, including the project key.</p>
     *
     *
     * @return null|string
     */
    public function getSource()
    {
        if (is_null($this->source)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SOURCE);
            if (is_null($data)) {
                return null;
            }
            $this->source = (string) $data;
        }

        return $this->source;
    }

    /**
     * <p>Unique identifier of the resource that triggered the event.</p>
     *
     *
     * @return null|string
     */
    public function getSubject()
    {
        if (is_null($this->subject)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SUBJECT);
            if (is_null($data)) {
                return null;
            }
            $this->subject = (string) $data;
        }

        return $this->subject;
    }

    /**
     * <p>Corresponds to the <code>lastModifiedAt</code> of the resource at the time the event was triggered.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getTime()
    {
        if (is_null($this->time)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TIME);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->time = $data;
        }

        return $this->time;
    }

    /**
     * <p>Corresponds to the <code>sequenceNumber</code> of a <a href="ctp:api:type:MessageSubscription">MessageSubscription</a>. Can be used to process messages in the correct order.</p>
     *
     *
     * @return null|string
     */
    public function getSequence()
    {
        if (is_null($this->sequence)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SEQUENCE);
            if (is_null($data)) {
                return null;
            }
            $this->sequence = (string) $data;
        }

        return $this->sequence;
    }

    /**
     * <p><code>&quot;Integer&quot;</code></p>
     *
     *
     * @return null|string
     */
    public function getSequencetype()
    {
        if (is_null($this->sequencetype)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SEQUENCETYPE);
            if (is_null($data)) {
                return null;
            }
            $this->sequencetype = (string) $data;
        }

        return $this->sequencetype;
    }

    /**
     * <p>The URI from which the message can be retrieved if messages are <a href="/../api/projects/messages#enable-querying-messages-via-the-api">enabled</a>. Only set for <a href="ctp:api:type:MessageSubscription">MessageSubscriptions</a>.</p>
     *
     *
     * @return null|string
     */
    public function getDataref()
    {
        if (is_null($this->dataref)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DATAREF);
            if (is_null($data)) {
                return null;
            }
            $this->dataref = (string) $data;
        }

        return $this->dataref;
    }

    /**
     * <p><a href="ctp:api:type:MessageDeliveryPayload">MessageDeliveryPayload</a>, <a href="ctp:api:type:ResourceCreatedDeliveryPayload">ResourceCreatedDeliveryPayload</a>, <a href="ctp:api:type:ResourceUpdatedDeliveryPayload">ResourceUpdatedDeliveryPayload</a>, or <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a>, <a href="ctp:api:type:EventDeliveryPayload">EventDeliveryPayload</a>.</p>
     *
     *
     * @return null|DeliveryPayload
     */
    public function getData()
    {
        if (is_null($this->data)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DATA);
            if (is_null($data)) {
                return null;
            }

            $this->data = DeliveryPayloadModel::of($data);
        }

        return $this->data;
    }


    /**
     * @param ?string $specversion
     */
    public function setSpecversion(?string $specversion): void
    {
        $this->specversion = $specversion;
    }

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?string $source
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
    }

    /**
     * @param ?string $subject
     */
    public function setSubject(?string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @param ?DateTimeImmutable $time
     */
    public function setTime(?DateTimeImmutable $time): void
    {
        $this->time = $time;
    }

    /**
     * @param ?string $sequence
     */
    public function setSequence(?string $sequence): void
    {
        $this->sequence = $sequence;
    }

    /**
     * @param ?string $sequencetype
     */
    public function setSequencetype(?string $sequencetype): void
    {
        $this->sequencetype = $sequencetype;
    }

    /**
     * @param ?string $dataref
     */
    public function setDataref(?string $dataref): void
    {
        $this->dataref = $dataref;
    }

    /**
     * @param ?DeliveryPayload $data
     */
    public function setData(?DeliveryPayload $data): void
    {
        $this->data = $data;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[CloudEventsPayload::FIELD_TIME]) && $data[CloudEventsPayload::FIELD_TIME] instanceof \DateTimeImmutable) {
            $data[CloudEventsPayload::FIELD_TIME] = $data[CloudEventsPayload::FIELD_TIME]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
