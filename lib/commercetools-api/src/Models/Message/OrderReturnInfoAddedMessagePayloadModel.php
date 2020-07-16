<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\ReturnInfo;
use Commercetools\Api\Models\Order\ReturnInfoModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderReturnInfoAddedMessagePayloadModel extends JsonObjectModel implements OrderReturnInfoAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'ReturnInfoAdded';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?ReturnInfo
     */
    protected $returnInfo;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?ReturnInfo $returnInfo = null
    ) {
        $this->returnInfo = $returnInfo;
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
     * @return null|ReturnInfo
     */
    public function getReturnInfo()
    {
        if (is_null($this->returnInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_RETURN_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->returnInfo = ReturnInfoModel::of($data);
        }

        return $this->returnInfo;
    }


    /**
     * @param ?ReturnInfo $returnInfo
     */
    public function setReturnInfo(?ReturnInfo $returnInfo): void
    {
        $this->returnInfo = $returnInfo;
    }
}
