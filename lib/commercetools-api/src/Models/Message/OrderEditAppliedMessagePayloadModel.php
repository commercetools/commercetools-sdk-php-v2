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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderEditAppliedMessagePayloadModel extends JsonObjectModel implements OrderEditAppliedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderEditApplied';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?OrderEditReference
     */
    protected $edit;

    /**
     * @var ?OrderEditApplied
     */
    protected $result;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?OrderEditReference $edit = null,
        ?OrderEditApplied $result = null
    ) {
        $this->edit = $edit;
        $this->result = $result;
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
     * @return null|OrderEditReference
     */
    public function getEdit()
    {
        if (is_null($this->edit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EDIT);
            if (is_null($data)) {
                return null;
            }

            $this->edit = OrderEditReferenceModel::of($data);
        }

        return $this->edit;
    }

    /**
     * @return null|OrderEditApplied
     */
    public function getResult()
    {
        if (is_null($this->result)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RESULT);
            if (is_null($data)) {
                return null;
            }

            $this->result = OrderEditAppliedModel::of($data);
        }

        return $this->result;
    }


    /**
     * @param ?OrderEditReference $edit
     */
    public function setEdit(?OrderEditReference $edit): void
    {
        $this->edit = $edit;
    }

    /**
     * @param ?OrderEditApplied $result
     */
    public function setResult(?OrderEditApplied $result): void
    {
        $this->result = $result;
    }
}
