<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Api\Models\OrderEdit\OrderEditAppliedModel;
use Commercetools\Api\Models\OrderEdit\OrderEditModel;
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

     * @var ?OrderEdit
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
        ?OrderEdit $edit = null,
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
     * <p><a href="ctp:api:type:OrderEdit">OrderEdit</a> that was applied.</p>
     *

     * @return null|OrderEdit
     */
    public function getEdit()
    {
        if (is_null($this->edit)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_EDIT);
            if (is_null($data)) {
                return null;
            }

            $this->edit = OrderEditModel::of($data);
        }

        return $this->edit;
    }

    /**
     * <p>Information about a successfully applied <a href="ctp:api:type:OrderEdit">OrderEdit</a>.</p>
     *

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
     * @param ?OrderEdit $edit
     */
    public function setEdit(?OrderEdit $edit): void
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
