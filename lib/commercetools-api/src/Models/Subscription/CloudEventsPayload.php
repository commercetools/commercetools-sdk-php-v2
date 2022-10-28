<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface CloudEventsPayload extends JsonObject
{
    public const FIELD_SPECVERSION = 'specversion';
    public const FIELD_ID = 'id';
    public const FIELD_TYPE = 'type';
    public const FIELD_SOURCE = 'source';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_TIME = 'time';
    public const FIELD_SEQUENCE = 'sequence';
    public const FIELD_SEQUENCETYPE = 'sequencetype';
    public const FIELD_DATAREF = 'dataref';
    public const FIELD_DATA = 'data';

    /**
     * <p>The version of the <a href="https://github.com/cloudevents/spec/blob/v1.0.2/cloudevents/spec.md">CloudEvents</a> specification which the event uses.</p>
     *

     * @return null|string
     */
    public function getSpecversion();

    /**
     * <p>Unique identifier of the event.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * <p>The <code>type</code> is namespaced with <code>com.commercetools</code>, followed by the <a href="ctp:api:type:ReferenceTypeId">ReferenceTypeId</a>, the type of Subscription (either <code>message</code> or <code>change</code>), and the message or change type.
     * For example, <code>com.commercetools.product.message.ProductPublished</code> or <code>com.commercetools.order.change.ResourceCreated</code>.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>The default REST URI of the <a href="ctp:api:type:ReferenceTypeId">ReferenceTypeId</a> that triggered this event, including the project key.</p>
     *

     * @return null|string
     */
    public function getSource();

    /**
     * <p>Unique identifier of the resource that triggered the event.</p>
     *

     * @return null|string
     */
    public function getSubject();

    /**
     * <p>Corresponds to the <code>lastModifiedAt</code> of the resource at the time the event was triggered.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getTime();

    /**
     * <p>Corresponds to the <code>sequenceNumber</code> of a <a href="ctp:api:type:MessageSubscription">MessageSubscription</a>. Can be used to process messages in the correct order.</p>
     *

     * @return null|string
     */
    public function getSequence();

    /**
     * <p><code>&quot;Integer&quot;</code></p>
     *

     * @return null|string
     */
    public function getSequencetype();

    /**
     * <p>The URI from which the message can be retrieved if messages are <a href="/../api/projects/messages#enable-querying-messages-via-the-api">enabled</a>. Only set for <a href="ctp:api:type:MessageSubscription">MessageSubscriptions</a>.</p>
     *

     * @return null|string
     */
    public function getDataref();

    /**
     * <p><a href="ctp:api:type:MessageDeliveryPayload">MessageDeliveryPayload</a>, <a href="ctp:api:type:ResourceCreatedDeliveryPayload">ResourceCreatedDeliveryPayload</a>, <a href="ctp:api:type:ResourceUpdatedDeliveryPayload">ResourceUpdatedDeliveryPayload</a>, or <a href="ctp:api:type:ResourceDeletedDeliveryPayload">ResourceDeletedDeliveryPayload</a>.</p>
     *

     * @return null|DeliveryPayload
     */
    public function getData();

    /**
     * @param ?string $specversion
     */
    public function setSpecversion(?string $specversion): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?string $source
     */
    public function setSource(?string $source): void;

    /**
     * @param ?string $subject
     */
    public function setSubject(?string $subject): void;

    /**
     * @param ?DateTimeImmutable $time
     */
    public function setTime(?DateTimeImmutable $time): void;

    /**
     * @param ?string $sequence
     */
    public function setSequence(?string $sequence): void;

    /**
     * @param ?string $sequencetype
     */
    public function setSequencetype(?string $sequencetype): void;

    /**
     * @param ?string $dataref
     */
    public function setDataref(?string $dataref): void;

    /**
     * @param ?DeliveryPayload $data
     */
    public function setData(?DeliveryPayload $data): void;
}
