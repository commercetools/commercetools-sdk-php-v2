<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Api\Models\OrderEdit\OrderEditAppliedModel;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;
use Commercetools\Api\Models\OrderEdit\OrderEditReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderEditAppliedMessagePayloadModel extends JsonObjectModel implements OrderEditAppliedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderEditApplied';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?OrderEditApplied
     */
    protected $result;

    /**
     * @var ?OrderEditReference
     */
    protected $edit;

    public function __construct(
        OrderEditApplied $result = null,
        OrderEditReference $edit = null
    ) {
        $this->result = $result;
        $this->edit = $edit;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|OrderEditApplied
     */
    public function getResult()
    {
        if (is_null($this->result)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderEditAppliedMessagePayload::FIELD_RESULT);
            if (is_null($data)) {
                return null;
            }

            $this->result = OrderEditAppliedModel::of($data);
        }

        return $this->result;
    }

    /**
     * @return null|OrderEditReference
     */
    public function getEdit()
    {
        if (is_null($this->edit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderEditAppliedMessagePayload::FIELD_EDIT);
            if (is_null($data)) {
                return null;
            }

            $this->edit = OrderEditReferenceModel::of($data);
        }

        return $this->edit;
    }

    public function setResult(?OrderEditApplied $result): void
    {
        $this->result = $result;
    }

    public function setEdit(?OrderEditReference $edit): void
    {
        $this->edit = $edit;
    }
}
