<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CloudEventsPayload>
 */
final class CloudEventsPayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $specversion;

    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $type;

    /**

     * @var ?string
     */
    private $source;

    /**

     * @var ?string
     */
    private $subject;

    /**

     * @var ?DateTimeImmutable
     */
    private $time;

    /**

     * @var ?string
     */
    private $sequence;

    /**

     * @var ?string
     */
    private $sequencetype;

    /**

     * @var ?string
     */
    private $dataref;

    /**

     * @var null|DeliveryPayload|DeliveryPayloadBuilder
     */
    private $data;

    /**
     * <p>The version of the <a href="https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/spec.md">CloudEvents</a> specification which the event uses.</p>
     *

     * @return null|string
     */
    public function getSpecversion()
    {
        return $this->specversion;
    }

    /**
     * <p>Unique identifier of the event.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>The <code>type</code> is namespaced with <code>com.commercetools</code>, followed by the <a href="ctp:api:type:ReferenceTypeId">ReferenceTypeId</a>, the type of Subscription (either <code>message</code> or <code>change</code>), and the message or change type.
     * For example, <code>com.commercetools.product.message.ProductPublished</code> or <code>com.commercetools.order.change.ResourceCreated</code>.</p>
     *

     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>The default REST URI of the <a href="ctp:api:type:ReferenceTypeId">ReferenceTypeId</a> that triggered this event, including the project key.</p>
     *

     * @return null|string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * <p>Unique identifier of the resource that triggered the event.</p>
     *

     * @return null|string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * <p>Corresponds to the <code>lastModifiedAt</code> of the resource at the time the event was triggered.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * <p>Corresponds to the <code>sequenceNumber</code> of a <a href="ctp:api:type:MessageSubscription">MessageSubscription</a>. Can be used to process messages in the correct order.</p>
     *

     * @return null|string
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * <p><code>&quot;Integer&quot;</code></p>
     *

     * @return null|string
     */
    public function getSequencetype()
    {
        return $this->sequencetype;
    }

    /**
     * <p>The URI from which the message can be retrieved if messages are <a href="/../api/projects/messages#enable-querying-messages-via-the-api">enabled</a>. Only set for <a href="ctp:api:type:MessageSubscription">MessageSubscriptions</a>.</p>
     *

     * @return null|string
     */
    public function getDataref()
    {
        return $this->dataref;
    }

    /**
     * <p><a href="ctp:api:type:MessageDeliveryPayload">MessageDeliveryPayload</a>, <a href="ctp:api:type:ResourceCreatedDeliveryPayload">ResourceCreatedDeliveryPayload</a>, <a href="ctp:api:type:ResourceUpdatedDeliveryPayload">ResourceUpdatedDeliveryPayload</a>, or <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a>, <a href="ctp:api:type:EventDeliveryPayload">EventDeliveryPayload</a>.</p>
     *

     * @return null|DeliveryPayload
     */
    public function getData()
    {
        return $this->data instanceof DeliveryPayloadBuilder ? $this->data->build() : $this->data;
    }

    /**
     * @param ?string $specversion
     * @return $this
     */
    public function withSpecversion(?string $specversion)
    {
        $this->specversion = $specversion;

        return $this;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param ?string $source
     * @return $this
     */
    public function withSource(?string $source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @param ?string $subject
     * @return $this
     */
    public function withSubject(?string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $time
     * @return $this
     */
    public function withTime(?DateTimeImmutable $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @param ?string $sequence
     * @return $this
     */
    public function withSequence(?string $sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * @param ?string $sequencetype
     * @return $this
     */
    public function withSequencetype(?string $sequencetype)
    {
        $this->sequencetype = $sequencetype;

        return $this;
    }

    /**
     * @param ?string $dataref
     * @return $this
     */
    public function withDataref(?string $dataref)
    {
        $this->dataref = $dataref;

        return $this;
    }

    /**
     * @param ?DeliveryPayload $data
     * @return $this
     */
    public function withData(?DeliveryPayload $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @deprecated use withData() instead
     * @return $this
     */
    public function withDataBuilder(?DeliveryPayloadBuilder $data)
    {
        $this->data = $data;

        return $this;
    }

    public function build(): CloudEventsPayload
    {
        return new CloudEventsPayloadModel(
            $this->specversion,
            $this->id,
            $this->type,
            $this->source,
            $this->subject,
            $this->time,
            $this->sequence,
            $this->sequencetype,
            $this->dataref,
            $this->data instanceof DeliveryPayloadBuilder ? $this->data->build() : $this->data
        );
    }

    public static function of(): CloudEventsPayloadBuilder
    {
        return new self();
    }
}
