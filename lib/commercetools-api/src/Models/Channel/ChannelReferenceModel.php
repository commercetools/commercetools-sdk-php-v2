<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ChannelReferenceModel extends JsonObjectModel implements ChannelReference
{
    const DISCRIMINATOR_VALUE = 'channel';

    /**
     * @var ?string
     */
    protected $typeId;

    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?Channel
     */
    protected $obj;

    public function __construct(
        string $id = null,
        Channel $obj = null
    ) {
        $this->id = $id;
        $this->obj = $obj;
        $this->typeId = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Reference::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|Channel
     */
    public function getObj()
    {
        if (is_null($this->obj)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ChannelReference::FIELD_OBJ);
            if (is_null($data)) {
                return null;
            }

            $this->obj = ChannelModel::of($data);
        }

        return $this->obj;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setObj(?Channel $obj): void
    {
        $this->obj = $obj;
    }
}
